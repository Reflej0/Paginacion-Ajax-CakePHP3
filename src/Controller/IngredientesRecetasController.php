<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * IngredientesRecetas Controller
 *
 * @property \App\Model\Table\IngredientesRecetasTable $IngredientesRecetas
 *
 * @method \App\Model\Entity\IngredientesReceta[] paginate($object = null, array $settings = [])
 */
class IngredientesRecetasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Ingredientes', 'Recetas']
        ];
        $ingredientesRecetas = $this->paginate($this->IngredientesRecetas);

        $this->set(compact('ingredientesRecetas'));
        $this->set('_serialize', ['ingredientesRecetas']);
    }

    /**
     * View method
     *
     * @param string|null $id Ingredientes Receta id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ingredientesReceta = $this->IngredientesRecetas->get($id, [
            'contain' => ['Ingredientes', 'Recetas']
        ]);

        $this->set('ingredientesReceta', $ingredientesReceta);
        $this->set('_serialize', ['ingredientesReceta']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ingredientesReceta = $this->IngredientesRecetas->newEntity();
        if ($this->request->is('post')) {
            $ingredientesReceta = $this->IngredientesRecetas->patchEntity($ingredientesReceta, $this->request->getData());
            if ($this->IngredientesRecetas->save($ingredientesReceta)) {
                $this->Flash->success(__('The ingredientes receta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ingredientes receta could not be saved. Please, try again.'));
        }
        $ingredientes = $this->IngredientesRecetas->Ingredientes->find('list', ['limit' => 200]);
        $recetas = $this->IngredientesRecetas->Recetas->find('list', ['limit' => 200]);
        $this->set(compact('ingredientesReceta', 'ingredientes', 'recetas'));
        $this->set('_serialize', ['ingredientesReceta']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ingredientes Receta id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ingredientesReceta = $this->IngredientesRecetas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ingredientesReceta = $this->IngredientesRecetas->patchEntity($ingredientesReceta, $this->request->getData());
            if ($this->IngredientesRecetas->save($ingredientesReceta)) {
                $this->Flash->success(__('The ingredientes receta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ingredientes receta could not be saved. Please, try again.'));
        }
        $ingredientes = $this->IngredientesRecetas->Ingredientes->find('list', ['limit' => 200]);
        $recetas = $this->IngredientesRecetas->Recetas->find('list', ['limit' => 200]);
        $this->set(compact('ingredientesReceta', 'ingredientes', 'recetas'));
        $this->set('_serialize', ['ingredientesReceta']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ingredientes Receta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ingredientesReceta = $this->IngredientesRecetas->get($id);
        if ($this->IngredientesRecetas->delete($ingredientesReceta)) {
            $this->Flash->success(__('The ingredientes receta has been deleted.'));
        } else {
            $this->Flash->error(__('The ingredientes receta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
