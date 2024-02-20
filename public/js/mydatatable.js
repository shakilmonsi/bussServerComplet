$(document).ready(function () {
    "use strict";
    var companyname = $("#logotext").val();

    // location dataTable
    $('#locationlist').DataTable({
        "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
        dom: 'lBfrtip',
        buttons: [

            {
                extend: 'copy',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0, 1]
                }
            },
            {
                extend: 'csv',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0, 1]
                }
            },
            {
                extend: 'excel',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0, 1]
                }
            },
            {
                extend: 'pdf',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0, 1]
                }
            },
            {
                extend: 'print',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0, 1]
                }
            },

        ],
        responsive: true,
    });
// location dataTable


 // stand dataTable
 $('#standlist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1]
            }
        },

    ],
    responsive: true,

});
// stand dataTable

// facility dataTable
    $('#facilitylist').DataTable({
        "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
        dom: 'lBfrtip',
        language: {
            search: search,
            lengthMenu: lengthMenu,
            zeroRecords: zeroRecords,
            info:info ,
            infoEmpty:infoEmpty,
            infoFiltered: infoFiltered,
            paginate: {
                first: first,
                previous: previous,
                next: next ,
                last: last
            }
        },
        buttons: [

            {
                extend: 'copy',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0, 1]
                }
            },
            {
                extend: 'csv',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0, 1]
                }
            },
            {
                extend: 'excel',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0, 1]
                }
            },
            {
                extend: 'pdf',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0, 1]
                }
            },
            {
                extend: 'print',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0, 1]
                }
            },

        ],
        responsive: true,

    });
// facility dataTable


// fleet dataTable

$('#fleetlist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4,5]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4,5]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4,5]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4,5]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4,5]
            }
        },

    ],
    responsive: true,

});


// fleet dataTable


// vehical dataTable
$('#listvehical').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4,5,6,7,8]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4,5,6,7,8]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4,5,6,7,8]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4,5,6,7,8]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4,5,6,7,8]
            }
        },

    ],
    responsive: true,

});
// vehical dataTable


//employee type
$('#employeetype').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2]
            }
        },

    ],
    responsive: true,

});

//employee type

//employee list

$('#employeelist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4]
            }
        },

    ],
    responsive: true,

});
//employee list


//Schedule list
$('#schedulelist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2]
            }
        },

    ],
    responsive: true,

});

//Schedule list



//Schedulefilter list
$('#schedulefilterlist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4]
            }
        },

    ],
    responsive: true,

});

//Schedulefilter list


//tax list
$('#taxlist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4]
            }
        },

    ],
    responsive: true,

});
//tax list




//trip list
$('#triplist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4,5,6,7]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4,5,6,7]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4,5,6,7]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4,5,6,7]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4,5,6,7]
            }
        },

    ],
    responsive: true,

});
//trip list


//Sub trip list
$('#subtriplist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4,5]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4,5]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4,5]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4,5]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4,5]
            }
        },

    ],
    responsive: true,

});
//Sub trip list


//How it Work list
$('#howitwork').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3]
            }
        },

    ],
    responsive: true,

});
//How it Work list




//How blog list
$('#bloglist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3]
            }
        },

    ],
    responsive: true,

});
//How blog list



//Languae list
$('#languagelist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },

    ],
    responsive: true,

});
//Languae list



//Role list
$('#rolelist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1]
            }
        },

    ],
    responsive: true,

});
//Role list


//passanger list
$('#passangerlist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0, 1,2,3,4]
            }
        },

    ],
    responsive: true,

});
//passanger list


//paymethod list
$('#paymethodlist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },

    ],
    responsive: true,

});
//paymethod list




//paymentgateway list
$('#paymentgateway').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },

    ],
    responsive: true,

});
//paymentgateway list


//max time list
$('#maxtimelist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1]
            }
        },

    ],
    responsive: true,

});
//max time list


//max time list
$('#ticketbookinglist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7]
            }
        },

    ],
    responsive: true,

});
//max time list


//Pay detail list
$('#paydetaillist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,]
            }
        },

    ],
    responsive: true,

});
//Pay detail list



//agent list
$('#agentlist').DataTable({
    
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7]
            }
        },

    ],
    responsive: true,

});
//agent list


//commission list
$('#commissionlist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7,8]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7,8]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7,8]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7,8]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7,8]
            }
        },

    ],
    responsive: true,

});
//commission list



//socialmedia list
$('#socialmedialist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1]
            }
        },

    ],
    responsive: true,

});
//socialmedia list



//add list
$('#addlist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },

    ],
    responsive: true,

});
//add list



//Question list
$('#questionlist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },

    ],
    responsive: true,

});
//Question list


//Inquiries list
$('#inquirylist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4]
            }
        },

    ],
    responsive: true,

});
//Inquiries list



//Coupon list
$('#couponlist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
        },

    ],
    responsive: true,

});
//Coupon list



//fitness list
$('#fitnesslist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
        },


    ],
    responsive: true,

});
//fitness list



//Refund list
$('#refundlist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5]
            }
        },

    ],
    responsive: true,

});
//Refund list



//Refund list
$('#cancellist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5]
            }
        },

    ],
    responsive: true,

});
//Refund list



//Refund list
$('#agenttransactionlist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
        },

    ],
    responsive: true,

});
//Refund list



//Ticket sold list
$('#ticketsoldreport').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7,8,9,10,11]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7,8,9,10,11]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7,8,9,10,11]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7,8,9,10,11]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7,8,9,10,11]
            }
        },

    ],
    responsive: true,

});
//Ticket sold list



//Language String list
$('#languageString').DataTable({
    "lengthMenu": [[40,50,60 -1], [40,50,60, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1]
            }
        },

    ],
    responsive: true,

});
//Language String list




//Language String Value list
$('#languageStringValue').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1]
            }
        },

    ],
    responsive: true,

});
//Language String Value list



//Menu list
$('#menulist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4]
            }
        },

    ],
    responsive: true,

});
//Menu list



//permission list
$('#permissionlist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },

    ],
    responsive: true,

});
//permission list




//rating list
$('#ratinglist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },

    ],
    responsive: true,

});
//rating list


//subscribe list
$('#subscribelist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },

    ],
    responsive: true,

});
//subscribe list





//payment Gateway  list
$('#paymentgatewaylist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2]
            }
        },

    ],
    responsive: true,

});
//payment Gateway  list

 // Account Tranjection dataTable
    $('#accountTran').DataTable({
        "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
        dom: 'lBfrtip',
        language: {
            search: search,
            lengthMenu: lengthMenu,
            zeroRecords: zeroRecords,
            info:info ,
            infoEmpty:infoEmpty,
            infoFiltered: infoFiltered,
            paginate: {
                first: first,
                previous: previous,
                next: next ,
                last: last
            }
        },
        buttons: [

            {
                extend: 'copy',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0, 1,2,3,4,5]
                }
            },
            {
                extend: 'csv',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0, 1,2,3,4,5]
                }
            },
            {
                extend: 'excel',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                   columns: [0, 1,2,3,4,5]
                }
            },
            {
                extend: 'pdf',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0, 1,2,3,4,5]
                }
            },
            {
                extend: 'print',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                   columns: [0, 1,2,3,4,5]
                }
            },

        ],
        responsive: true,
    });
 // Account Tranjection dataTable


 // Agent Pay dataTable
    $('#agentpay').DataTable({
        "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
        dom: 'lBfrtip',
        language: {
            search: search,
            lengthMenu: lengthMenu,
            zeroRecords: zeroRecords,
            info:info ,
            infoEmpty:infoEmpty,
            infoFiltered: infoFiltered,
            paginate: {
                first: first,
                previous: previous,
                next: next ,
                last: last
            }
        },
        buttons: [

            {
                extend: 'copy',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0, 1,2,3]
                }
            },
            {
                extend: 'csv',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0, 1,2,3]
                }
            },
            {
                extend: 'excel',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0, 1,2,3]
                }
            },
            {
                extend: 'pdf',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0, 1,2,3]
                }
            },
            {
                extend: 'print',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0, 1,2,3]
                }
            },

        ],
        responsive: true,
    });
 // Agent Pay dataTable


 //Sum Report list
$('#sumreport').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    language: {
        search: search,
        lengthMenu: lengthMenu,
        zeroRecords: zeroRecords,
        info:info ,
        infoEmpty:infoEmpty,
        infoFiltered: infoFiltered,
        paginate: {
            first: first,
            previous: previous,
            next: next ,
            last: last
        }
    },
    buttons: [

        {
            extend: 'copy',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
        },
        {
            extend: 'csv',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
        },
        {
            extend: 'excel',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
        },
        {
            extend: 'pdf',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
        },
        {
            extend: 'print',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
        },

    ],
    responsive: true,

});
//Sum Report list


});




