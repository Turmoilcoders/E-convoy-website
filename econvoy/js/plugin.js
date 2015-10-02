/**
 * Created by Arvind on 16-Sep-15.
 */

// Toast Notification
$(window).load(function() {
    setTimeout(function() {
        Materialize.toast('<span>Hello! Welcome.</span>', 1500);
    }, 1500);
    setTimeout(function() {
        Materialize.toast('<span>You have task to </span><a class="btn-flat yellow-text" href="#">Do<a>', 3000);
    }, 5000);
});
//sidebar for mobile closing and opening
$('.sidebar-collapse ').sideNav({
        menuWidth: 240, // Default is 240
        edge: 'left', // Choose the horizontal origin
        closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
);

