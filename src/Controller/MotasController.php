<?php
declare(strict_types=1);

namespace App\Controller;

class MotasController extends AppController
{

    // listar todas as motas
    public function index()
    {
        $motas = $this->Motas->find('all');
        $this->set(compact('motas'));
    }

    // ver uma mota
    public function view($id = null)
    {
        $mota = $this->Motas->get($id);
        $this->set(compact('mota'));
    }

    // adicionar mota
    public function add()
    {
        $mota = $this->Motas->newEmptyEntity();

        if ($this->request->is('post')) {
            $mota = $this->Motas->patchEntity($mota, $this->request->getData());

            if ($this->Motas->save($mota)) {
                $this->Flash->success('Mota adicionada com sucesso.');
                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error('Erro ao adicionar mota.');
        }

        $this->set(compact('mota'));
    }

    // editar mota
    public function edit($id = null)
    {
        $mota = $this->Motas->get($id);

        if ($this->request->is(['post','put','patch'])) {
            $mota = $this->Motas->patchEntity($mota, $this->request->getData());

            if ($this->Motas->save($mota)) {
                $this->Flash->success('Mota atualizada.');
                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error('Erro ao atualizar mota.');
        }

        $this->set(compact('mota'));
    }

    // apagar mota
    public function delete($id = null)
    {
        $this->request->allowMethod(['post','delete']);

        $mota = $this->Motas->get($id);

        if ($this->Motas->delete($mota)) {
            $this->Flash->success('Mota apagada.');
        } else {
            $this->Flash->error('Erro ao apagar.');
        }

        return $this->redirect(['action' => 'index']);
    }
}