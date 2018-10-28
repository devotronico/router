<main>
<a class="btn btn-primary form-btn" href="/create">Crea Utente</a>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Country</th>
      <th scope="col">Birth</th>
      <th scope="col">Reg_date</th>
      <th scope="col">Read</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($users as $user) : ?> 
      <tr>
        <th scope="row"><a href="/post/<?=$user->id?>"><?=$user->id?></a></th>
        <td><?=$user->name?></td>
        <td><?=$user->gender?></td>
        <td><?=$user->country?></td>
        <td><?=$user->birth?></td>
        <td><?=$user->reg_date?></td>
        <td><a class="btn btn-success form-btn" href="/read/<?=$user->id?>">&#128463;</a></td>
        <td><a class="btn btn-warning form-btn" href="/update/<?=$user->id?>">&#128472;</a></td>
        <td><a class="btn btn-danger form-btn" href="/delete/<?=$user->id?>">&#128473;</a></td>
      </tr>
      <?php endforeach; ?>
  </tbody>
</table>

<!-- <hr>
<div class="row justify-content-center">
  <div class="col-4 ">
    <form action="/create" method="POST">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter a name">
      </div>
      <div class="form-group">
        <label for="country">Country</label>
        <input type="text" class="form-control" id="country" placeholder="Enter a country">
      </div>
      <div class="form-group">
        <label class="my-1 mr-2" for="gender">Gender</label>
        <select class="custom-select my-1 mr-sm-2" id="gender">
          <option selected>Choose...</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>
</main> -->
