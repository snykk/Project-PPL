<?php
echo $this->session->flashdata('message'); 
unset($_SESSION['message']);
?>
<div class="container">
    <h1>Hallo ini home user</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis qui nulla molestias atque, quam dolores molestiae explicabo voluptatem consequuntur doloremque sequi adipisci architecto expedita veniam ullam? Aliquid non iste fugiat?</p>
</div>