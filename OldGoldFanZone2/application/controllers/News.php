<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['news'] = $this->news_model->get_news();
                 $data['title'] = 'News archive';

                $this->load->view('templates/header', $data);
                $this->load->view('news/index', $data);
                $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
                $data['news_item'] = $this->news_model->get_news($slug);

                if (empty($data['news_item']))
        {
                show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
        }

        public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Create a news item';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('news/create');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->news_model->set_news();
        $this->load->view('news/success');
    }
}

}

/*Looking at the code, you may see some similarity with the files we created earlier. First, the __construct() method: it calls the constructor of its parent class (CI_Controller) and loads the model, so it can be used in all other methods in this controller. It also loads a collection of URL Helper functions, because we’ll use one of them in a view later.

Next, there are two methods to view all news items and one for a specific news item. You can see that the $slug variable is passed to the model’s method in the second method. The model is using this slug to identify the news item to be returned.

Now the data is retrieved by the controller through our model, but nothing is displayed yet. The next thing to do is passing this data to the views.*/

/*The code above gets all news records from the model and assigns it to a variable. The value for the title is also assigned to the $data['title'] element and all data is passed to the views. You now need to create a view to render the news items. Create application/views/news/index.php and add the next piece of code.*/

/*Instead of calling the get_news() method without a parameter, the $slug variable is passed, so it will return the specific news item.*/