<!DOCTYPE html>
<html>
<head>
  <title>登陆界面</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style>
    .container1{
      margin:auto;
      margin-top: 100px;
      width:1200px;
      text-align:center;
    }

  </style>
</head>
<body>
    <!-- <ul class="nav nav-tabs justify-content-center">
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul> -->
  <!-- Nav tabs -->
<div  class="container1">
  <div class="card">
    <div class="card-body">
      <nav class="navbar navbar-expand-sm justify-content-center bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Logo</a>
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
          <a class="nav-link active text-muted" data-toggle="tab" href="#login">登陆</a>
          </li>
          <li class="nav-item">
          <a class="nav-link text-muted" data-toggle="tab" href="#register">注册</a>
          </li>
        </ul>
  <!-- <a href="#" class="btn btn-success role="button">返回</a> -->
      </nav>


  <!-- Tab panes -->
      <div class="tab-content bg-dark">
        <div id="login" class="container tab-pane active"><br>
          <?= form_open('check/check'); ?>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">用户名</span>
              </div>
              <input type="text" class="form-control" placeholder="数字/字母/下划线" id="id" name="id">
            </div>

            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="密码" id="password" name="password">
              <div class="input-group-append">
                <span class="input-group-text">password</span>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">登陆</button>
          </form>
        </div>

        <div id="register" class="container tab-pane fade"><br>
          <?= form_open('creatuser/creatuser'); ?>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">用户名</span>
              </div>
              <input type="text" class="form-control" placeholder="数字/字母/下划线" id="id" name="id">
            </div>

            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="密码" id="password" name="password">
              <div class="input-group-append">
                <span class="input-group-text">password</span>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
              注册
            </button>
             
            <!-- 模态框 -->
            <div class="modal fade" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
             
                  <!-- 模态框头部 -->
                  <div class="modal-header">
                    <h4 class="modal-title">提示</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
             
                  <!-- 模态框主体 -->
                  <div class="modal-body">
                    注册成功
                  </div>
             
                  <!-- 模态框底部 -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
                  </div>            
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>