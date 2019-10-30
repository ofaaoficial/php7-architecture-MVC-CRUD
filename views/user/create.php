<section class="container">
    <h1>Crear usuario</h1>
    <form action="?controller=user&method=store" method="POST" enctype="multipart/form-data">
        <section class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required class="form-control">
        </section>
        <section class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required class="form-control">
        </section>
        <section class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required class="form-control">
        </section>
        <section class="form-group">
            <label for="file">Image</label>
            <input type="file" name="file" id="file" class="form-control">
        </section>
        <section class="form-group">
            <input type="submit" value="Registar" class="btn btn-green">
            <a href="?controller=user" class="btn btn-outline-red ml-2">Volver</a>
        </section>
    </form>
</section>