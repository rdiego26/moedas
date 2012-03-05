<?php
/**
 * MY_Controller.php
 *
 * Descrição
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package
 * @subpackage controllers
 */

/**
 * MY_Controller
 *
 * @property CI_Loader  $load
 * @property CI_Input   $input
 */
class MY_Controller extends CI_Controller {

    /**
     * Método construtor
     */
    public function  __construct() {
        parent::__construct();

        /**
         * $data
         *
         * Array con informações para as views
         */
        $this->data = array();

        /**
         * Array com javascripts que serão carregados nas views 
         */
        $this->data['javascripts'] = array(
            'base'
        );
    }
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
