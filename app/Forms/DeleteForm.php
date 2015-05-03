<?php namespace App\Forms;
/**
 * Created by PhpStorm.
 * User: Karam
 * Date: 2/05/2015
 * Time: 10:25 AM
 */


use Kris\LaravelFormBuilder\Form;

class DeleteForm extends Form
{
    public function buildForm()
    {
        $this

            ->add('delete', 'submit', [
                'attr' => ['class' => 'btn btn-primary']
            ])
        ;
        // Add fields here...
    }
}
