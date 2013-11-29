<?php

echo $this->Form->create('Server', array('type' => 'post', 'url' => array('controller' => 'servers', 'action' => 'save')));
echo $this->Form->hidden('id');
echo $this->Form->input('name', array('label' => 'Server Name'));
echo $this->Form->input('hostname', array('label' => 'Hostname'));
echo $this->Form->input('type', array('label' => 'Server Type'));
echo $this->Form->input('internal', array('label' => 'Internal IP-address'));
echo $this->Form->input('external', array('label' => 'External address'));
echo $this->Form->end('Save');

?>