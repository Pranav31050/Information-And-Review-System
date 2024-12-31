<style>
/* Styling the container */
.menu-container {
    width: 100%; /* Make the container take full width */
    padding: 10px; /* Padding around the container */
    border: 1px solid #ddd; /* Light border */
    border-radius: 8px; /* Rounded corners for the container */
    background-color: #f9f9f9; /* Light background */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Slight shadow */
    margin-bottom: 20px; /* Space below the container */
}

/* Styling the unordered list for a horizontal layout */
ul {
    list-style-type: none; /* Removes bullet points */
    padding: 0; /* Removes padding */
    margin: 0; /* Removes margin */
    display: flex; /* Display list items in a horizontal row */
    justify-content: flex-start; /* Align items to the left */
    flex-wrap: wrap; /* Allow wrapping to the next line on small screens */
}

/* Styling for each menu item (li) */
li {
    margin-right: 40px; /* Increase the gap between menu items */
    margin-bottom: 10px; /* Space for better alignment on smaller screens */
}

/* General Styling for the Menu Links */
.menu {
    text-decoration: none; /* Removes underline from links */
    color: #333; /* Text color */
    font-size: 14px; /* Font size */
    padding: 6px 10px; /* Padding inside each link */
    border-radius: 4px; /* Rounded corners for the links */
    transition: background-color 0.3s ease; /* Smooth transition for background color */
}

/* Hover effect for menu items */
.menu:hover {
    background-color: #007bff; /* Blue background on hover */
    color: white; /* White text on hover */
}

/* Align text to the right for the "text-right" class */
.text-right {
    text-align: right;
}

/* Adjustments for the logged-in panel */
#loggedPanel {
    display: inline-block; /* Keeps the logged panel in line with the menu */
    margin-left: 40px; /* Increase space between menu and logged panel */
    margin-top: 10px; /* Space above the logged-in panel */
}

/* Responsive Design for Mobile Devices */
@media (max-width: 768px) {
    .menu-container {
        width: 100%; /* Makes the container full-width on smaller screens */
    }

    .menu {
        font-size: 12px; /* Smaller font size on smaller screens */
        padding: 5px 8px; /* Reduced padding for mobile */
    }

    ul {
        flex-direction: column; /* Stacks the menu items vertically on smaller screens */
        align-items: flex-start; /* Left-align items on smaller screens */
    }

    li {
        margin-right: 0; /* Removes the right margin on mobile */
        margin-bottom: 15px; /* Adds space between items vertically on mobile */
    }
}
</style>

<?php
$email = '';
$show = '';
if(!empty($_SESSION['userid']) && $_SESSION['userid']) {
    $email =  $_SESSION['email'];        
} else {
    $show = 'hidden'; /* Hide the logged-in panel if the user is not logged in */
}
?>    

<div class="menu-container">
    <ul>
        <li><span><a class="menu" href="../index.php">Home</a></span></li>
        <li><span><a class="menu" href="../categories.php">Categories</a></span></li>
        <li><span><a class="menu" href="../addinfo.php">Add info</a></span></li>
        <li><span><a class="menu" href="../aboutus.php">About Us</a></span></li>

        <!-- Logged-in panel appears only if the user is logged in -->
        <li id="loggedPanel" class="<?php echo $show; ?>">
            Logged in as <span id="loggedUser" class="logged-user"><?php echo $email; ?></span>
            <a class="menu" href="action.php?action=logout">Logout</a>
        </li>
    </ul>
</div>
