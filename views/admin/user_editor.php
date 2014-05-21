<a href="#myModal"  role="button" class="btn btn-primary" style="margin-bottom: 20px;" data-toggle="modal">Create New user</a>
<div style="margin: 0 auto">
    <table  id="list2"></table>
</div>
<div id="pager2"></div> 

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Registration</h3>
    </div>
    <div class="modal-body">
        <div class="span6">
            <div class="area">
                <form id="usersData" class="form-horizontal">
                    <div class="heading">
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputFirst">Nick Name</label>
                        <div class="controls">
                            <input required name="Nickname" type="text" id="inputFirst" placeholder="E.g. Ashwin">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputLast">First Name</label>
                        <div class="controls">
                            <input required name="Firstname" type="text" id="inputLast" placeholder="E.g. Hegde">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Last Name</label>
                        <div class="controls">
                            <input required name="Lastname" type="text" id="inputEmail" placeholder="E.g. ashwinh@cybage.com">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputUser">Street</label>
                        <div class="controls">
                            <input required name="Street" type="text" id="inputUser" placeholder="E.g. ashwinhegde">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputUser">City</label>
                        <div class="controls">
                            <input required name="City" type="text" id="inputUser" placeholder="E.g. ashwinhegde">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputUser">Postcode</label>
                        <div class="controls">
                            <input required name="Postcode" type="text" id="inputUser" placeholder="E.g. ashwinhegde">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputUser">Bio</label>
                        <div class="controls">
                            <textarea required name="Bio"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Password</label>
                        <div class="controls">
                            <input required name="Password" type="password" id="inputPassword" placeholder="Min. 8 Characters">
                        </div>
                    </div>
                    <!--<div class="control-group">
                        <label class="control-label" for="inputPassword">Password again</label>
                        <div class="controls">
                            <input name="Password_again" type="password" id="inputPassword" placeholder="Min. 8 Characters">
                        </div>
                    </div>-->
                </form>	
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button id="newUser" class="btn btn-primary">Save changes</button>
    </div>
</div>


<div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="editModalThisName"></h3>
    </div>
    <div class="modal-body">
        <div class="span6">
            <div class="area">
                <form id="usersDataEdit" class="form-horizontal">
                    <input id="edit_id" type="hidden" name="id" value="" >
                    <div class="control-group">
                        <label class="control-label" for="inputFirst">Nick Name</label>
                        <div class="controls">
                            <input required name="Nickname" type="text" id="inputNickEdit" placeholder="E.g. Ashwin">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputLast">First Name</label>
                        <div class="controls">
                            <input required name="Firstname" type="text" id="inputFirstEdit" placeholder="E.g. Hegde">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Last Name</label>
                        <div class="controls">
                            <input required name="Lastname" type="text" id="inputLastEdit" placeholder="E.g. ashwinh@cybage.com">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputUser">Street</label>
                        <div class="controls">
                            <input required name="Street" type="text" id="inputStreetEdit" placeholder="E.g. ashwinhegde">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputUser">City</label>
                        <div class="controls">
                            <input required name="City" type="text" id="inputCityEdit" placeholder="E.g. ashwinhegde">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputUser">Postcode</label>
                        <div class="controls">
                            <input required name="Postcode" type="text" id="inputPostcodeEdit" placeholder="E.g. ashwinhegde">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputUser">Bio</label>
                        <div class="controls">
                            <textarea required id="inputBioEdit" name="Bio"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Password</label>
                        <div class="controls">
                            <input required name="Password" type="password" id="inputPasswordEdit" placeholder="Min. 8 Characters">
                        </div>
                    </div>
                    <!--<div class="control-group">
                        <label class="control-label" for="inputPassword">Password again</label>
                        <div class="controls">
                            <input name="Password_again" type="password" id="inputPassword" placeholder="Min. 8 Characters">
                        </div>
                    </div>-->
                </form>	
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button id="updateUser" class="btn btn-primary">Update changes</button>
    </div>
</div>


<div id="myModal3" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete</h3>
    </div>
    <div class="modal-body">
        <div class="confirm_del block">Are you sure want you delete this user: <span id="thisUserName"></span>?</div>
        <div class="span6">
            <div class="area">
                <form id="delData" class="form-horizontal">
                    <input id="del_id" type="hidden" name="id" value="" >
                </form>	
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button id="deleteUser" class="btn btn-danger">Delete</button>
    </div>
</div>



<script type="text/javascript">
    $(document).ready(function() {
       
        $("#list2").jqGrid({
            url: 'user_editor/getUsers',
            datatype: "json",
            colNames: ['Id', 'Nickname', 'Firstname', 'Lastname', 'Street', 'City', 'Postcode', 'Bio', 'method'],
            colModel: [
                {name: 'id', index: 'id', width: 55},
                {name: 'invdate', index: 'invdate', width: 90},
                {name: 'name', index: 'name asc, invdate', width: 100},
                {name: 'amount', index: 'amount', width: 80, align: "right"},
                {name: 'tax', index: 'tax', width: 80, align: "right"},
                {name: 'total', index: 'total', width: 80, align: "right"},
                {name: 'note', index: 'note', width: 150, sortable: false},
                {name: 'bio', index: 'bio', width: 150, sortable: false},
                {name: 'method', index: 'method', width: 200, editable: false, formatter: function(val, rowModel, values) {
                        return "<a  nickName='" + values[1] + "' firstName='" + values[2] + "' lastName='" + values[3] + "' street='" + values[4] + "' \n\
                        city='" + values[5] + "'  postCode='" + values[6] + "' bio='" + values[7] + "' href='#myModal2' data-toggle='modal' class='btn edit btn-success'  _id='" + rowModel.rowId + "'></a>" +
                                "<a userName='" + values[2] + " " + values[3] + "'  class='btn delete btn-danger' href='#myModal3' data-toggle='modal'  id_del='" + rowModel.rowId + "'></a>";
                    }}
            ],
            rowNum: 10,
            rowList: [10, 20, 30],
            pager: '#pager2',
            sortname: 'id',
            viewrecords: true,
            sortorder: "desc",
            caption: "Users",
            height: 250,
            width: $(".hero-unit").width(),
            loadComplete: function() {
                $(".edit").append("<i class='icon-edit icon-grey'></i>");
                $(".delete").append("<i class='icon-trash icon-white'></i>");

                $(".edit").click(function() {
                    var id = $(this).attr("_id");
                    var nickName = $(this).attr("nickName");
                    var firstName = $(this).attr("firstName");
                    var lastName = $(this).attr("lastName");
                    var street = $(this).attr("street");
                    var postCode = $(this).attr("postCode");
                    var bio = $(this).attr("bio");
                    var city = $(this).attr("city");

                    $("#edit_id").val(id);
                    $("#inputNickEdit").val(nickName);
                    $("#inputFirstEdit").val(firstName);
                    $("#inputLastEdit").val(lastName);
                    $("#inputStreetEdit").val(street);
                    $("#inputCityEdit").val(city);
                    $("#inputPostcodeEdit").val(postCode);
                    $("#inputBioEdit").val(bio);
                    $("#inputPasswordEdit").val("");
                    $("#editModalThisName").text("Edit:" + " " + firstName + " " + lastName);


                });

                $("td[role=gridcell]").removeAttr("title");


                $(".delete").click(function() {
                    var thisUser = $(this).attr("userName");
                    $("#thisUserName").text(thisUser);
                    var del_id = $(this).attr("id_del");
                    $("#del_id").val(del_id);
                    var data = $("#delData").serializeArray();
                    $("#deleteUser").click(function() {
                        $.ajax({
                            type: "POST",
                            url: 'user_editor/delUsers',
                            data: data,
                        }).done(function() {
                            $('#myModal3').modal('hide');
                            alert("success");
                            $("#list2").trigger("reloadGrid");

                        });
                    });

                });
            }
        });

        $("#list2").jqGrid('navGrid', '#pager2', {edit: false, add: false, del: false});

        $("#newUser").click(function() {
            var data = $("#usersData").serializeArray();
            var name = $("#inputFirst").val();
            var desc = $("#inputLast").val();
            if (name == "" || desc == "") {
                alert("error");
            }
            else {
                $.ajax({
                    type: "POST",
                    url: 'user_editor/addUsers',
                    data: data,
                }).done(function() {
                    $('#myModal').modal('hide');
                    alert("success");
                    $("#list2").trigger("reloadGrid");

                });

            }
        });
        $("#updateUser").click(function() {
            var data = $("#usersDataEdit").serializeArray();

            var nick = $("#inputNickEdit").val();
            var first = $("#inputFirstEdit").val();
            var last = $("#inputLastEdit").val();
            var street = $("#inputStreetEdit").val();
            var city = $("#inputCityEdit").val();
            var postcode = $("#inputPostcodeEdit").val();
            var bio = $("#inputBioEdit").val();
            var pass = $("#inputPasswordEdit").val();
            if (nick == "" || first == "" || last == "" || street == "" || city == "" || postcode == "" || bio == "" || pass == "") {
                alert("error");
            }
            else {
                $.ajax({
                    type: "POST",
                    url: 'user_editor/editUsers',
                    data: data,
                }).done(function() {
                    $('#myModal2').modal('hide');
                    alert("success");
                    $("#list2").trigger("reloadGrid");

                });

            }
        });



    });
</script>
