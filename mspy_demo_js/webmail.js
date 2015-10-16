/**
 * Created by ARTEM on 18.11.2014.
 */
var aSelectedItems = [];

$(function () {
// show/hide list with select options
    $("#js-showList").on("click", function () {
        $("#js-listOptions").toggle();
    });

    $("body").bind("click", function () {
        $("#js-listOptions").hide();
    });

    $("#js-showList, #js-listOptions").on("click", function (e) {
        e.stopPropagation();
    });

//  open/hide mail content
    $(".webmail-row").on("click", function () {
        //$(".webmail-row.open").removeClass("open");
        $(this).toggleClass("open");
        //$(this+" .arrow-wrap span").toggleClass("wb-close_arrow wb-open_arrow");
    });

    /*$(".arrow-wrap").on("click", function () {
        $(".webmail-row.open").removeClass("open");
        $(this+" span").toggleClass("wb-open_arrow wb-close_arrow");
    });*/

// select rows
    $("#js-selectAllMails").on("change", function () {
        if ($(".webmail-row").length) {
            $(".filter_wrp").toggle();
            $(".delete-btn").toggle();
        }

        ( $(this).is(':checked') ) ? selectRows() : selectRows('none');

    });


    $(".cb-wrap_list_item:not(:first)").on("click", function () {
        var criteriaQuery = $(this).data("check-option");

        selectRows(criteriaQuery);

        $("#js-selectAllMails").prop("checked", true)
            .attr("checked", "checked");

        $("#js-listOptions").hide();

        if (!$(".delete-btn").is(':visible')) {
            $(".filter_wrp").toggle();
            $(".delete-btn").toggle();
        }
    });

    $("#js-removeCheck").on("click", function () {
        $("#js-selectAllMails").prop("checked", false);

        $("#js-listOptions").hide();

        $(".filter_wrp").toggle();
        $(".delete-btn").toggle();

        selectRows('none');
    });

//checkbox event
    $(".row-checkbox").on("click", function (e) {
        e.stopPropagation();

        if (!$("#js-selectAllMails").prop("checked")) {
            $(".filter_wrp").toggle();
            $(".delete-btn").toggle();
            $("#js-selectAllMails").prop("checked", true);
        }

        aSelectedItems = []; //clear array
        $(".row-checkbox").each(function () {
            ( $(this).is(':checked') ) ? aSelectedItems.push($(this).data("mail-id")) : null;
        });

        if (aSelectedItems.length == 0) {
            $("#js-selectAllMails").prop("checked", false);
            $(".filter_wrp").toggle();
            $(".delete-btn").toggle();
        }
    });

//click on bookmark
    $(".ico-bookmarked").on("click", function (e) {
        e.stopPropagation();
        var mailId = $(this).data('mail-id');

        $(this).toggleClass("active");

        ( $(this).hasClass("active") ) ? sendRequest("bookmark", 1, mailId) : sendRequest("bookmark", 0, mailId);
    });
//delete click
    $("#js-deleteItems").on("click", function () {
        if (confirm("Are you sure?")) {
            sendRequest("delete", 1, aSelectedItems)
        }

    });
    //delete click from body mail
    $(".ico-delete").on("click", function () {
        if (confirm("Are you sure?")) {
            sendRequest("delete", 1, $(this).data('mail-id'));
        }
    });

    $(".ico-print").click(function () {
        $(this).closest('.webmail-body').find("iframe").contents().find('body').printArea();
    });
});

function selectRows(_criteria) {
    var criteria = _criteria || "all";
    aSelectedItems = []; //clear array
    var nodeCheckboxHTML;
    $(".row-checkbox").prop("checked", false);

    switch (criteria) {
        case "all":
            $(".row-checkbox").each(function () {
                $(this).prop("checked", true);
                aSelectedItems.push($(this).data("mail-id"));
            });
            break;
        case "income":
            $(".webmail-icon.income").each(function () {
                nodeCheckboxHTML = $(this).parents(".webmail-primary_info").find(".row-checkbox");

                nodeCheckboxHTML.prop("checked", true);
                aSelectedItems.push(nodeCheckboxHTML.data("mail-id"));
            });
            break;
        case "sent":
            $(".webmail-icon.outcome").each(function () {
                nodeCheckboxHTML = $(this).parents(".webmail-primary_info").find(".row-checkbox");

                nodeCheckboxHTML.prop("checked", true);
                aSelectedItems.push(nodeCheckboxHTML.data("mail-id"));
            });
            break;
        case "fav":
            $(".ico-bookmarked.active").each(function () {
                nodeCheckboxHTML = $(this).parents(".webmail-primary_info").find(".row-checkbox");

                nodeCheckboxHTML.prop("checked", true);
                aSelectedItems.push(nodeCheckboxHTML.data("mail-id"));
            });
            break;
        case "no_fav":
            $(".ico-bookmarked:not(.active)").each(function () {
                nodeCheckboxHTML = $(this).parents(".webmail-primary_info").find(".row-checkbox");

                nodeCheckboxHTML.prop("checked", true);
                aSelectedItems.push(nodeCheckboxHTML.data("mail-id"));
            });
            break;
        case "none":
            break;

    }
}

function sendRequest(_action, _data, _i) {
    var _items = _i || null;

    $.ajax({
        type: "POST",
        url: $url,
        cache: false,
        data: {
            "action": _action,
            "data": _data,
            "items": _items
        },
        dataType: "json",
        timeout: 5000,
        success: function (data) {
            if (_action == "delete") {
                if (Array.prototype.isPrototypeOf(_items)) {
                    $.each(_items, function (index, value) {
                        $(".webmail-row[data-row-id=" + value + "]").remove();
                    });
                } else {
                    $(".webmail-row[data-row-id=" + _items + "]").remove();
                }

                if ($("#js-deleteItems").is(":visible")) {
                    $("#js-selectAllMails").prop("checked", false);
                    $(".filter_wrp").toggle();
                    $(".delete-btn").toggle();
                }
            }
        },
        error: function () {
            showAjaxWindowInfo('Error was occured! Please, try again.');
        }
    });
}