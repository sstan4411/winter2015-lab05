<!--using formfields helper to style the form-->

<div class="row">
    <!--error message formating-->
    <div class="errors">{message}</div>
    <form action="/admin/confirm" method="post">
        {fid}
        {fwho}
        {fmug}
        {fwhat}
        {fsubmit}
    </form>
</div>