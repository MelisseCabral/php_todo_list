<html>
  <header>
  </header>

  <body>
    <h4>To do List with PHP and postgresql</h4>
    <table style="width: 100%">
      <thead>
        <tr>
          <th></th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Data</th>
        </tr>
      </thead>
    <table>
    <div>
      <button type="button" >Atualizar</button>
      <button type="sumit">Remover</button>
    </div>

    <form action="add_on_list.php" style="display: grid; margin: 1em">
      <h4>Nova Tarefa</h4>
      <input type='text'placeholder="Título" name="title" style="margin: 1em" ></input>
      <input type='text' placeholder="Descrição" name="description" style="margin: 1em"></input>
      <input type='text' placeholder="Data" name="date_init" style="margin: 1em"></input>

      <button type="button" style="margin-left:75%">Adicionar novo</button>
    </form>    
  </body>



  <footer>
  </footer>
</html>
