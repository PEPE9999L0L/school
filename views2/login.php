<?php require_once 'header.php'; ?>

<!-- DIV -->
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Login</h4>
                <hr class="mb-3">
                <form action="../controllers/register.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId"
                            placeholder="" requied />
                        <small id="helpId" class="form-text text-muted">Enter your username</small>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div id="passwordContainer">
                            <input type="password" class="form-control" name="password" id="password"
                                aria-describedby="helpId" placeholder="" requied />
                            <i class="fa-solid fa-eye" id="eyeIcon" onclick="showContent('password', this)"></i>
                            <small id="helpId" class="form-text text-muted">Enter your password</small>
                        </div>
                    </div>
                    <div class="mb-3 text-center">
                        <button class="btn btn-primary" name="submit" id="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
<!-- DIV END -->

<!-- JS -->
<script>
    let showContent = (id, eye) => {
        let input = document.getElementById(id)
        let hidden = input.getAttribute("type")
        if (hidden === "password") {
            input.setAttribute("type", "text")
            eye.setAttribute("class", "fa-solid fa-eye-slash")
        }
        else {
            input.setAttribute("type", "password")
            eye.setAttribute("class", "fa-solid fa-eye")
        }
    }
</script>
<!-- JS END -->

<?php require_once 'footer.php'; ?>