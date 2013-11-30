<?php

echo $this->Form->create('Service', array('type' => 'post', 'url' => array('controller' => 'services', 'action' => 'save')));
echo $this->Form->hidden('id');
echo $this->Form->input('server_id', array('label' => 'Host Server ID'));
echo $this->Form->input('name', array('label' => 'Service Name'));
echo $this->Form->input('internalport', array('label' => 'Internal Port'));
echo $this->Form->input('externalport', array('label' => 'External Port'));
echo $this->Form->input('description', array('label' => 'Description'));
echo $this->Form->input('url1', array('label' => 'URL 1'));
echo $this->Form->input('url2', array('label' => 'URL 2'));
echo $this->Form->end('Save');

?>