<section class="container">
    <h1>Crear usuario</h1>
    <form action="?controller=user&method=update&id=<?= $user->id ?>" method="POST">
        <section class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required class="form-control" value="<?= $user->name ?>">
        </section>
        <section class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required class="form-control" value="<?= $user->email ?>">
        </section>
        <section class="form-group">
            <input type="submit" value="Actualizar" class="btn btn-green">
            <a href="?controller=user" class="btn btn-outline-red ml-2">Volver</a>
        </section>
    </form>
</section>