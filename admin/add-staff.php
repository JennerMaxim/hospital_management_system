<?php include 'includes/header.php'; ?>
<div class="main">
    <?php include 'includes/sidebar.php'; ?>
    <div class="workspace workspacestaff">
        <center>
            <h1>ADD STAFF</h1>
            <hr>
            <form action="#" method="post">
                <input type="text" name="staff" id="" autofocus required placeholder="Enter Name">
                <input type="tel" name="contact" id="" placeholder="Enter Phone Number">
                <input type="text" name="title" id="" placeholder="Enter Title">
                <select name="gender" id="">
                    <option value="">Select Gender</option>
                    <option value="">Female</option>
                    <option value="">Male</option>
                </select>
                <select name="location" id="">
                    <option value="">Select Location</option>
                    <option value="">Kabalagala</option>
                    <option value="">Nsambya</option>
                    <option value="">Makerere</option>
                </select>
                <input type="submit" value="Add Staff" class="btn">
            </form>
        </center>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
