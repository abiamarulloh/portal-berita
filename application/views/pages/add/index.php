<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Page</title>
</head>
<body>
  <div class="container-fluid">
  <h3>Add News</h3>
  <form action="" method="post">
    <table >
      <tr>
        <td>
          <label for="title">Title</label>
        </td>
        <td>:</td>
        <td>
          <input type="text" name='title' required>
        </td>
      </tr>
      <tr>
        <td>
        <label for="image">Image</label>
        </td>    
        <td>:</td>
        <td>
        <input type="file" required>
        </td>
      </tr>
      <tr>
        <td>
        <label for="description">Description</label>
        </td>
        <td>:</td>
        <td>
        <input type="text">
        </td>
      </tr>
      <tr>
        <td>
        <label for="tags">Tags</label>
        </td>
        <td>:</td>
        <td>
        <input type="text">
        </td>
      </tr>
      <tr>
        <td>
        <label for="author">Author</label>
        </td>
        <td>:</td>
        <td>
        <input type="text">
        </td>
      </tr>
      <tr>
        <td>
        <label for="start-date">Start Date</label>
        </td>
        <td>:</td>
        <td>
        <input type="text">
        </td>
      </tr>
      <tr>
        <td>
        <label for="update-date">Update Date</label>
        </td>
        <td>:</td>
        <td>
        <input type="text">
        </td>
      </tr>
    </table>
    <button class='button btn-primary'>Submit</button>
  </form>
  </div>
</body>
</html>