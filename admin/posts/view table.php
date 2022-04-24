<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="text-uppercase text-center">ID</th>
                <th class="text-uppercase text-center">TITLE</th>
                <th class="text-uppercase text-center">IMAGE</th>
                <th class="text-uppercase text-center">PARAGRAPH</th>
                <th class="text-uppercase text-center">category</th>
                <th class="text-uppercase text-center">DATE</th>
                <th class="text-uppercase text-center text-primary">control</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach(range(0,12) as $key )
            {
          ?>
            <form method="get" action="">
              <tr>
                  <td class="text-break text-capitalize">Cell 1</td>
                  <td class="text-break text-capitalize">Cell 2</td>
                  <td class="text-capitalize text-center">
                      <picture><img class="rounded img-fluid" src="cyberpunk-2077-night-city-v-car-uhdpaper.com-4K-30.jpg" width="100px" alt="pic" loading="auto" /></picture>
                  </td>
                  <td class="text-break text-capitalize text-start">
                      <p class="text-break" style="max-width: 170px;">FdssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssFdssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssFdssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssdsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br /></p><br />
                  </td>
                  <td class="text-capitalize">Cell 2</td>
                  <td class="text-break text-capitalize">Cell 2</td>
                  <td class="text-capitalize text-center">
                      <div class="btn-group" role="group"><button class="btn btn-primary" type="submit">Update</button><button class="btn btn-danger" type="submit">Delete</button></div>
                  </td>
              </tr>
            </form>
          <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td>Summary 1</td>
                <td>Summary 2</td>
                <td>Summary 2</td>
                <td>Summary 2</td>
                <td>Summary 2</td>
                <td>Summary 2</td>
            </tr>
        </tfoot>
    </table>
</div>