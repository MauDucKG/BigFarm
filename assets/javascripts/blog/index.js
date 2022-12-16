$(".btn-reply")
    .click(function (e) {
        var user = $(this).data("user");
        var news;
        if ($(this).data("news") == '') {
            news = null;
        }
        else {
            news = $(this).data("news");
        }
        var parent = $(this).data("parent");
        var content = $(this).parent().find("textarea").val();
        $.ajax
            ({
                type: 'post',
                url: 'index.php?page=main&controller=blog&action=reply',
                data:
                {
                    content: content,
                    news_id: news,
                    user_id: user,
                    parent: parent
                },
                success: function (response) {
                    if (response == 'success') {
                        $(`#modal-${news}`).load(location.href + ` #modal-${news}>*`, "");
                        $(`#modal-${news}`).modal("show");
                    }
                    else {
                        alert('Cannot insert');
                    }
                }
            });
    });

$(".btn-comment")
    .click(function (e) {
        var user = $(this).data("user");
        var news;
        if ($(this).data("news") == '') {
            news = null;
        }
        else {
            news = $(this).data("news");
        }
        var parent = $(this).data("parent");
        var content = $(this).parent().find("textarea").val();
        $.ajax
            ({
                type: 'post',
                url: 'index.php?page=main&controller=blog&action=comment',
                data:
                {
                    content: content,
                    news_id: news,
                    user_id: user
                },
                success: function (response) {
                    if (response == 'success') {
                        const queryString = window.location.search;
                        const urlParams = new URLSearchParams(queryString);
                        const id = urlParams.get('id')
                        console.log(id)
                        $.ajax({
                            url: "index.php?page=main&controller=detail_blog&action=index&id=" + id,
                            success: function(result) {
                                $("#blog").html(result);
                            }
                        });
                    }
                    else {
                        alert('Cannot insert');
                    }
                }
            });
    });