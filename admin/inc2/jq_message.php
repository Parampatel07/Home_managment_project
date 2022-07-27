<script>
    function formate(abc,id)
    {
        var formate = `<div class="alert alert-success alert-dismissible" role="alert">
                                <div class="alert-icon">
                                    <i class="far fa-fw fa-bell"></i>
                                </div>
                                <div class="alert-message" style="text-transform: capitalize;">
                                `
                                abc
                                `</div>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`;
        var cont='#'.id;
        $("cont").html(formate);
    }
</script>