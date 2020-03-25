<?php

class Blog_user_model extends CI_model {

    public function getAllBlog($keyword = null){
        if($keyword){
            $this->db->like('judul', $keyword);
        }
        $this->db->select('blog.id, judul,path_gambar, author, text, tanggal_publish');
        $this->db->from('blog');
        $this->db->order_by('blog.id', 'asc');
        return $this->db->get()->result_array();    
    }

    public function getBlogByKategori($keyword = null, $kategori){
        if($keyword){
            $this->db->like('judul', $keyword);
        }
        $this->db->select('blog.id, judul,path_gambar, author, text, tanggal_publish, kategori');
        $this->db->from('kategori_blog');
        $this->db->join('blog', 'blog.id = kategori_blog.id_blog');
        $this->db->join('kategori', 'kategori.id = kategori_blog.id_kategori');
        $this->db->where('kategori.kategori', $kategori);
        $this->db->order_by('blog.id', 'asc');
        return $this->db->get()->result_array();
    }

    public function getBlogKategori(){
        return $this->db->query
        ("SELECT blog.id, kategori.kategori
        FROM blog, kategori_blog, kategori
        WHERE blog.id=kategori_blog.id_blog AND kategori.id=kategori_blog.id_kategori")
        ->result_array();
    }

    public function getKategori(){
        return $this->db->select('kategori')->get('kategori')->result_array();
    }

    public function popularBlog(){
        return $this->db->order_by('rate', 'DESC')->limit('5')->get('blog')->result_array();
    }
    
    public function getDetailBlog($id) {
        $this->db->select('judul,path_gambar, author, text, tanggal_publish, kategori');
        $this->db->from('kategori_blog');
        $this->db->join('blog', 'blog.id = kategori_blog.id_blog');
        $this->db->join('kategori', 'kategori.id = kategori_blog.id_kategori');
        $this->db->where('blog.id', $id);
        return $this->db->get()->result_array();
    }

    public function getCommentbyBlogId($id) {
        return $this->db->order_by('id_comment', 'DESC')->where(['id_blog' => $id])->get('comment')->result_array();
    }

    public function create_comment($id, $name) {
        $data = [
            'id_comment' => null,
            'id_blog' => $id,
            'name' => htmlspecialchars($name),
            'comment' => htmlspecialchars($this->input->post('isi_komen')),
        ];
        $this->db->insert('comment', $data);
    }

    public function getRatingBlogli($id) {
        return $this->db->select('like')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function updateRate($id, $rate){
        $data = [
            'rate' => $rate
        ];
        $this->db->where('id', $id);
        $this->db->update('blog', $data);
    }
    
    public function updateRatingli($id, $total) {
        $dataa = [
            'like' => $total,
        ];
        $this->db->where('id_blog', $id)->update('rating', $dataa);
    }

    public function getRatingBloglo($id) {
        return $this->db->select('love')->where('id_blog', $id)->get('rating')->row_array();
    }
    
    public function updateRatinglo($id, $total) {
        $dataa = [
            'love' => $total,
        ];
        $this->db->where('id_blog', $id)->update('rating', $dataa);
    }

    public function getRatingBlogh($id) {
        return $this->db->select('haha')->where('id_blog', $id)->get('rating')->row_array();
    }
    
    public function updateRatingh($id, $total) {
        $dataa = [
            'haha' => $total,
        ];
        $this->db->where('id_blog', $id)->update('rating', $dataa);
    }

    public function getRatingBlogw($id) {
        return $this->db->select('wow')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function updateRatingw($id, $total) {
        $dataa = [
            'wow' => $total,
        ];
        $this->db->where('id_blog', $id)->update('rating', $dataa);
    }

    public function getRatingBlogs($id) {
        return $this->db->select('sad')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function updateRatings($id, $total) {
        $dataa = [
            'sad' => $total,
        ];
        $this->db->where('id_blog', $id)->update('rating', $dataa);
    }

    public function getRatingBloga($id) {
        return $this->db->select('angry')->where('id_blog', $id)->get('rating')->row_array();
    }

    public function updateRatinga($id, $total) {
        $dataa = [
            'angry' => $total,
        ];
        $this->db->where('id_blog', $id)->update('rating', $dataa);
    }

}
