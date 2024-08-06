<?php
class Movie extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MovieModel');
    }

    public function index()
    {
        $this->load->view('ScreenMatchHome');
    }

    public function register()
    {
        $this->load->view('RegisterMovie');    
        
        if ($this->input->method() === 'post') 
        {
            $movieData = $this->input->post();

            if (!is_numeric($movieData["year"]))
            {
                print_r('The year field must contain a valid number');
                return null;
            }
                $response = $this->MovieModel->insertMovie($movieData);
                print_r ($response);           
        }
    }

    public function search()
    {
        $this->load->view('SearchMovie');
        
        if ($this->input->method() === 'get')
        {
            $movieData = $this->input->get();

            $response = $this->MovieModel->searchMovie($movieData);
            $this->load->view('ShowMovieData', $response);
        }
    }

    public function browseAll()
    {
        $response = $this->MovieModel->getAllMovies();
        print_r($response);
    }

    public function delete()
    {
        $this->load->view('DeleteMovie');

        if ($this->input->method() === 'get')
        {
            $movieData = $this->input->get();
            
            $response = $this->MovieModel->delete($movieData);
            if ($response == 0)
            {
                echo 'Deletion Failed';
                return null;
            }
            echo 'Deletion Successful';
        }
    }
}