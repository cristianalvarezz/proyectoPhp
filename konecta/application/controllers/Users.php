<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'email', 'pagination'));
        $this->load->helper(array('users/users_rules', 'string'));
        $this->load->model('ModelsUsers');
    }
    public function index($offset = 0)
    {
        $data = $this->ModelsUsers->getUsers();
        $config['base_url'] = base_url('users/index');
        $config['per_page'] = 4;
        $config['total_rows'] = count($data);

        $config['full_tag_open']     = '<div class="pagging text-center"><nav><ul class="pagination">';
        $config['full_tag_close']     = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']     = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']     = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']     = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']     = '</span></li>';
        $config['first_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']     = '</span></li>';

        $this->pagination->initialize($config);

        $page = $this->ModelsUsers->getPaginate($config['per_page'], $offset);

        $this->getTemplate($this->load->view('admin/show_users', array('data' => $page), true));
    }
    
    public function delete(){
        $_id = $this->input->post('id',true);
        if(empty($_id)){
            $this->output
                ->set_status_header(400)
                ->set_output(json_encode(array('msg'=>'El id no puede ser vacio')));
        }else{
            $this->ModelsUsers->deleteUser($_id);
            $this->output
                ->set_status_header(200);
        }
    }
    public function create()
    {
        $vista = $this->load->view('admin/create_user', '', true);
        $this->getTemplate($vista);
    }

    public function update()
    {
        $_id = $this->input->post('_id');
        $nombre = $this->input->post('nombre');
        $apellidos = $this->input->post('apellidos');
        $cedula = $this->input->post('cedula');
        $telefono = $this->input->post('telefono');
        $fecha = $this->input->post('fecha');
        $cliente = $this->input->post('cliente');
        $usuarioregistro = $this->input->post('usuarioregistro');
        $genero = $this->input->post('genero');
        $sede = $this->input->post('sede');
        $username = $this->input->post('username');
        $data = array(
            'nombre' => $nombre,
            'apellido' => $apellidos,
            'cedula' => $cedula,
            'telefono' => $telefono,
            'fecha' => $fecha,
            'cliente' => $cliente,
            'usuarioregistro' => $usuarioregistro,
            'genero' => $genero,
            'sede' => $sede,
        );
        $this->ModelsUsers->updateUser($_id, $data);
        $this->session->set_flashdata('msg', 'El usuario ' . $username . ' fue actualizado correctamente');
        redirect('/');
    }

    public function store()
    {
       
        $user = $this->input->post('user');
        $correo = $this->input->post('correo');
        $range = $this->input->post('range');
        $name = $this->input->post('name');
        $lastname = $this->input->post('lastname');
        $cedula = $this->input->post('cedula');
        $telefono = $this->input->post('telefono');
        $fecha = $this->input->post('fecha');
        $cliente = $this->input->post('cliente');
        $usuarioregistro = $this->input->post('usuarioregistro');
        $genero = $this->input->post('genero');
        $sede = $this->input->post('sede');
        $this->form_validation->set_rules(getCreateUserRules());

        if ($this->form_validation->run() == FALSE) {
            $this->output->set_status_header(400);
        } else {
            $user = array(
                'nombre_usuario' => $user,
                'contrasena' => random_string('alnum', 8),
                'correo' => $correo,
                'rango' => $range,
                'status' => 1,
            );

            $user_info = array(
                'nombre' => $name,
                'apellido' => $lastname,
                'cedula' => $cedula,

                'telefono' => $telefono,
                'fecha' => $fecha,
                'cliente' => $cliente,
                'usuarioregistro' => $usuarioregistro,
                'genero' => $genero,
                'sede' => $sede,
            );


            if (!$this->ModelsUsers->save($user, $user_info)) {
                $this->output->set_status_header(500);
                
            } else {
            
                $this->session->set_flashdata('msg', 'El usuario a sido registrado');
                redirect('/');
            }
            redirect('/');
        }

        $vista = $this->load->view('admin/create_user', '', true);
        $this->getTemplate($vista);
    }
    public function edit($id = 0)
    {
        $user = $this->ModelsUsers->getUser($id);
        $view = $this->load->view('admin/edit_user', array('user' => $user), true);
        $this->getTemplate($view);
    }
  
    public function getTemplate($view)
    {
        $data = array(
            'head' => $this->load->view('layout/head', '', TRUE),
            'nav' => $this->load->view('layout/nav', '', TRUE),
            'aside' => $this->load->view('layout/aside', '', TRUE),
            'content' => $view,
            'footer' => $this->load->view('layout/footer', '', TRUE),
        );
        $this->load->view('dashboard', $data);
    }
}
