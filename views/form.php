<?php include __DIR__ . '/partials/header.php'; ?>
    <main class="container">
      <?php if(isset($_GET['name']) && isset($_GET['age'])): ?>
        <h1>Hello <?=$_GET['name']?> you are <?=$_GET['age']?> years old!</h1>
      <?php endif ?>
      <form action="/answer?color=green&cat=Nuustik" method="POST">
        <div>
          <label for="name">Name</label>
          <input name="name" id="name">
        </div>
        <div>
          <label for="age">Age</label>
          <input name="age" id="age">
        </div>
        <button type="submit">Send</button>
        <input type="submit" value="Send info">
      </form>
    </main>
<?php include __DIR__ . '/partials/footer.php'; ?>
