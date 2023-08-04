<!DOCTYPE html>
<html>
<head>
    <title>Members List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>
    <h2>Members List</h2>
    <ul id="members-list">
        <!-- Member list will be populated here using AJAX -->
    </ul>

    <button id="add-member-btn">Add Member</button>

    <div id="add-member-dialog" title="Add New Member" style="display: none;">
        <form id="add-member-form">
            <label for="parent">Parent:</label>
            <select id="parent" name="parent"></select><br>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br>
            <!-- <input type="submit" value="Save Changes"> -->
        </form>
    </div>

    <script>
        $(document).ready(function () {
            // Function to fetch and update the members list using AJAX
            function fetchAndUpdateMembers() {
                $.ajax({
                    url: "fetch_members_ajax.php",
                    type: "GET",
                    success: function (data) {
                        $("#members-list").html(data);
                    }
                });
            }

            // Function to populate the parent dropdown using AJAX
            function populateParentDropdown() {
                $.ajax({
                    url: "populate_members_dropdown.php",
                    type: "GET",
                    success: function (data) {
                        $("#parent").html(data);
                    }
                });
            }

            // Open the "Add Member" dialog
            $("#add-member-btn").click(function () {
                $("#add-member-dialog").dialog("open");
            });

            // Initialize dialog
            $("#add-member-dialog").dialog({
                autoOpen: false,
                modal: true,
                buttons: {
                    "Save Changes": function () {
                        // AJAX form submission
                        $.ajax({
                            url: "add_member.php",
                            type: "POST",
                            data: $("#add-member-form").serialize(),
                            success: function () {
                                fetchAndUpdateMembers(); // Update the list after successful addition
                                $("#add-member-dialog").dialog("close");
                            }
                        });
                    },
                    Cancel: function () {
                        $(this).dialog("close");
                    }
                }
            });

            // Initial fetch of members and parent dropdown
            fetchAndUpdateMembers();
            populateParentDropdown();
        });
    </script>
</body>
</html>
