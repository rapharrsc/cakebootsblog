<?php
	/**
	 * 
	 */
	class PostsController extends AppController
	{
		public $helpers = array('Html', 'Form');

		public function index()
		{
			# code...
			$this->set('posts', $this->Post->find('all'));
		}

		public function view($id = null)
		{
			if (!$id) {
				# code...
				throw new NotFoundException(__("Postagem inválida"));
			}

			$post = $this->Post->findById($id);

			if (!$post) {
				# code...
				throw new NotFoundException(__("Postagem inválida"));
			}
			else
			{
				$this->set('post',$post);
			}
		}

		public function add()
		{
			if ($this->request->is('post')) {
				# code...
				if ($this->Post->save($this->request->data)) {
					# code...
					$this->Flash->success(__('Postagem salva com sucesso'));
					return $this->redirect(array('action'=>'index'));
				}
				else
				{
					$this->Flash->error(__('Erro ao adicionar postagem'));
				}
			}
		}

		/*public function edit($id = null)
		{
			if (!$id) {
				# code...
				throw new NotFoundException(__('Postagem inválida'));
			}

			$post = $this->Post->findById($id);

			if (!$post) {
				# code...
				throw new NotFoundException(__('Postagem inválida'));
			}

			if ($this->request->is(array('post', 'put'))) {
				# code...
				$this->Post->id = $id;
				if ($this->Post->save($this->request->data)) {
					# code...
					$this->Flash->success(__('Postagem atualizada'));
					return $this->redirect(array('action'=>'index'));
				}
				else
				{
					$this->Flash->error(__('Erro ao atualizar sua postagem'));
				}
			}
		}*/

		
//Editar postagem
		public function edit($id = null) {
			if (!$id) 
			{
				throw new NotFoundException(__('Invalid post'));
			}

			$post = $this->Post->findById($id);

			if (!$post) 
			{
				throw new NotFoundException(__('Invalid post'));
			}

			if ($this->request->is(array('post', 'put'))) 
			{
				$this->Post->id = $id;
				if ($this->Post->save($this->request->data)) 
				{
					$this->Flash->success(__('Your post has been updated.'));
					return $this->redirect(array('action' => 'index'));
				}
				else
				{
					$this->Flash->error(__('Unable to update your post.'));
				}
			}

			if (!$this->request->data) 
			{
				$this->request->data = $post;
			}
		}
		

		public function delete($id)
		{
			if ($this->request->is('get')) {
				throw new MethodNotAllowedException();
			}

			if ($this->Post->delete($id)) {
				$this->Flash->success(
					__('A postagem com id: %s foi deletada.', h($id))
				);
			} else {
				$this->Flash->error(
					__('A postagem com id: %s não pôde ser deletada.', h($id))
				);
			}
			
			return $this->redirect(array('action' => 'index'));
		}
	}
	?>