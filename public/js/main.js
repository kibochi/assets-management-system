$("#delete_account").on("click", function(e) {
    e.preventDefault();

    // var id = $(this).data("id");
    // var token = $("meta[name='csrf-token']").attr("content");

    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete",
    }).then((result) => {
        if (result.isConfirmed) {
            var form = document.getElementById("account-delete").submit();

            Swal.fire("Deleted!", "Account has been deleted.", "success");
        }
    });
});

$("#staff_account").on("click", function(e) {
    e.preventDefault();

    // var id = $(this).data("id");
    // var token = $("meta[name='csrf-token']").attr("content");

    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete",
    }).then((result) => {
        if (result.isConfirmed) {
            var form = document.getElementById("staff_delete").submit();

            Swal.fire("Deleted!", "Account has been deleted.", "success");
        }
    });
});

$("#asset_account").on("click", function(e) {
    e.preventDefault();

    // var id = $(this).data("id");
    // var token = $("meta[name='csrf-token']").attr("content");

    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete",
    }).then((result) => {
        if (result.isConfirmed) {
            var form = document.getElementById("asset_delete").submit();

            Swal.fire("Deleted!", "Asset has been deleted.", "success");
        }
    });
});

$("#myTable").DataTable({
    select: true,
});

const preloader = document.querySelector(".preloader");
const myalert = document.querySelector(".alert");

setTimeout(() => {
    myalert.classList.add("hidden");
}, 2000);
window.addEventListener("load", () => {
    preloader.classList.add("loaded");
});