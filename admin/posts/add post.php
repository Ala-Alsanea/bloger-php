<div class="container mt-4">
    <form class="text-center border rounded border-2" method="post" action="post.php">
        <h3 class="text-capitalize fs-3 fw-bold text-center text-primary mb-1" style="margin: 12px;">add post</h3>
        
        <div style="padding-right: 30px;padding-left: 30px;padding-top: 10px;padding-bottom: 10px;">
          <input class="form-control" type="text" name="title" placeholder="Add Title" required minlength="3" maxlength="100" autofocus />
        </div>
        
        <div style="padding-right: 30px;padding-left: 30px;padding-top: 10px;padding-bottom: 10px;">
          <input class="form-control" type="file" name="img" accept="image/*" />
        </div>
       
        <article style="padding-right: 30px;padding-left: 30px;padding-top: 10px;padding-bottom: 10px;">
          <textarea class="form-control" name="Paragraph" placeholder="Add Paragraph" minlength="3" maxlength="500" required></textarea>
        </article>
        
        <div style="padding-right: 30px;padding-left: 30px;padding-top: 10px;padding-bottom: 10px;">
            <select class="form-select" name="cat" required>
                <option value="12" selected>This is item 1</option>
                <option value="13">This is item 2</option>
                <option value="14">This is item 3</option>
            </select>
        </div>

        <aside class="text-center" style="padding-top: 10px;padding-right: 30px;padding-bottom: 10px;padding-left: 30px;">
          <button class="btn btn-success text-center link-light" type="submit">Publish</button>
        </aside>
    </form>
</div>