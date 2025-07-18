let dataSet = [
    [ "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ],
    [ "Garrett Winters", "Accountant", "Tokyo", "8422", "2011/07/25", "$170,750" ],
    [ "Ashton Cox", "Junior Technical Author", "San Francisco", "1562", "2009/01/12", "$86,000" ],
    [ "Cedric Kelly", "Senior Javascript Developer", "Edinburgh", "6224", "2012/03/29", "$433,060" ],
    [ "Airi Satou", "Accountant", "Tokyo", "5407", "2008/11/28", "$162,700" ],
    [ "Brielle Williamson", "Integration Specialist", "New York", "4804", "2012/12/02", "$372,000" ],
    [ "Herrod Chandler", "Sales Assistant", "San Francisco", "9608", "2012/08/06", "$137,500" ],
    [ "Rhona Davidson", "Integration Specialist", "Tokyo", "6200", "2010/10/14", "$327,900" ],
    [ "Colleen Hurst", "Javascript Developer", "San Francisco", "2360", "2009/09/15", "$205,500" ],
    [ "Sonya Frost", "Software Engineer", "Edinburgh", "1667", "2008/12/13", "$103,600" ],
    [ "Jena Gaines", "Office Manager", "London", "3814", "2008/12/19", "$90,560" ],
    [ "Quinn Flynn", "Support Lead", "Edinburgh", "9497", "2013/03/03", "$342,000" ],
    [ "Charde Marshall", "Regional Director", "San Francisco", "6741", "2008/10/16", "$470,600" ],
    [ "Haley Kennedy", "Senior Marketing Designer", "London", "3597", "2012/12/18", "$313,500" ],
    [ "Tatyana Fitzpatrick", "Regional Director", "London", "1965", "2010/03/17", "$385,750" ],
    [ "Michael Silva", "Marketing Designer", "London", "1581", "2012/11/27", "$198,500" ],
    [ "Paul Byrd", "Chief Financial Officer (CFO)", "New York", "3059", "2010/06/09", "$725,000" ],
    [ "Gloria Little", "Systems Administrator", "New York", "1721", "2009/04/10", "$237,500" ],
    [ "Bradley Greer", "Software Engineer", "London", "2558", "2012/10/13", "$132,000" ],
    [ "Dai Rios", "Personnel Lead", "Edinburgh", "2290", "2012/09/26", "$217,500" ],
    [ "Jenette Caldwell", "Development Lead", "New York", "1937", "2011/09/03", "$345,000" ],
    [ "Yuri Berry", "Chief Marketing Officer (CMO)", "New York", "6154", "2009/06/25", "$675,000" ],
    [ "Caesar Vance", "Pre-Sales Support", "New York", "8330", "2011/12/12", "$106,450" ],
    [ "Doris Wilder", "Sales Assistant", "Sidney", "3023", "2010/09/20", "$85,600" ],
    [ "Angelica Ramos", "Chief Executive Officer (CEO)", "London", "5797", "2009/10/09", "$1,200,000" ],
    [ "Gavin Joyce", "Developer", "Edinburgh", "8822", "2010/12/22", "$92,575" ],
    [ "Jennifer Chang", "Regional Director", "Singapore", "9239", "2010/11/14", "$357,650" ],
    [ "Brenden Wagner", "Software Engineer", "San Francisco", "1314", "2011/06/07", "$206,850" ],
    [ "Fiona Green", "Chief Operating Officer (COO)", "San Francisco", "2947", "2010/03/11", "$850,000" ],
    [ "Shou Itou", "Regional Marketing", "Tokyo", "8899", "2011/08/14", "$163,000" ],
    [ "Michelle House", "Integration Specialist", "Sidney", "2769", "2011/06/02", "$95,400" ],
    [ "Suki Burks", "Developer", "London", "6832", "2009/10/22", "$114,500" ],
    [ "Prescott Bartlett", "Technical Author", "London", "3606", "2011/05/07", "$145,000" ],
    [ "Gavin Cortez", "Team Leader", "San Francisco", "2860", "2008/10/26", "$235,500" ],
    [ "Martena Mccray", "Post-Sales support", "Edinburgh", "8240", "2011/03/09", "$324,050" ],
    [ "Unity Butler", "Marketing Designer", "San Francisco", "5384", "2009/12/09", "$85,675" ]
];




(function($) {
     "use strict"
	 
	 
    //example 1
    var table = $('#example').DataTable({
        createdRow: function ( row, data, index ) {
           $(row).addClass('selected')
        } ,
		language: {
			paginate: {
			   next: '<i class="fa-solid fa-angle-right"></i>',
			  previous: '<i class="fa-solid fa-angle-left"></i>' 
			}
		  }
    });
	var table1 = $('#projects-tbl').DataTable({
		//dom: 'Bfrtip',
		'dom': 'Bfrltip',
		buttons: [
            
			{ extend: 'excel', text: '<i class="fa-solid fa-file-excel"></i> Export Report',
              className: 'btn btn-sm border-0'
			}
        ],
		searching: false,
		pageLength:5,
		select: false,
        lengthChange:false ,
		language: {
			paginate: {
				next: '<i class="fa-solid fa-angle-right"></i>',
				previous: '<i class="fa-solid fa-angle-left"></i>' 
			}
			
		},
		
    });
    
    var table2 = $('#projects-tbl1').DataTable({
		//dom: 'Bfrtip',
		'dom': 'Bfrltip',
		buttons: [
            
			{ extend: 'excel', text: '<i class="fa-solid fa-file-excel"></i> Export Report',
              className: 'btn btn-sm border-0'
			}
        ],
		searching: false,
		pageLength:5,
		select: false,            
        lengthChange:false ,
		language: {
			paginate: {
				next: '<i class="fa-solid fa-angle-right"></i>',
				previous: '<i class="fa-solid fa-angle-left"></i>' 
			}
			
		},
		
    });
	var table3 = $('#contacts-tbl').DataTable({
		//dom: 'Bfrtip',
		'dom': 'Bfrltip',
		buttons: [
            
			{ extend: 'excel', text: '<i class="fa-solid fa-file-excel"></i> Export Report',
              className: 'btn btn-sm border-0'
			},
			
        ],
		searching: true,
		pageLength:15,
		select: false,            
        lengthChange:false ,
		language: {
			paginate: {
				next: '<i class="fa-solid fa-angle-right"></i>',
				previous: '<i class="fa-solid fa-angle-left"></i>' 
			},
			'search' : ' <i class="fa-solid fa-magnifying-glass"></i>',
			 searchPlaceholder: "Search..."
			
		},
		
    });
	var table4 = $('#projects-tblss').DataTable({
		//dom: 'Bfrtip',
		'dom': 'Bfrltip',
		buttons: [
            
			{ extend: 'excel', text: '<i class="fa-solid fa-file-excel"></i> Export Report',
              className: 'btn btn-sm border-0'
			}
        ],
		searching: false,
		pageLength:5,
		select: false,            
        lengthChange:false ,
		language: {
			paginate: {
				next: '<i class="fa-solid fa-angle-right"></i>',
				previous: '<i class="fa-solid fa-angle-left"></i>' 
			}
			
		},
		
    });
    
    var contactsTable = $('#contacts-tbl').DataTable({
    dom: 'Bfrltip',
    buttons: [
        {
            extend: 'excel',
            text: '<i class="fa-solid fa-file-excel"></i> Export Report',
            className: 'btn btn-sm border-0'
        }
    ],
    searching: true,
    pageLength: 15,
    select: false,
    lengthChange: false,
    language: {
        paginate: {
            next: '<i class="fa-solid fa-angle-right"></i>',
            previous: '<i class="fa-solid fa-angle-left"></i>'
        },
        search: ' <i class="fa-solid fa-magnifying-glass"></i>',
        searchPlaceholder: "Search..."
    }
});

	var table5 = $('#user-tbl').DataTable({
		//dom: 'Bfrtip',
		'dom': 'ZBfrltip',
		buttons: [
            
			{ extend: 'excel', text: '<i class="fa-solid fa-file-excel"></i> Export Report',
              className: 'btn btn-sm border-0'
			}
        ],
		
		searching: true,
		pageLength:12,
		select: false,            
        lengthChange:false ,
		language: {
			paginate: {
				next: '<i class="fa-solid fa-angle-right"></i>',
				previous: '<i class="fa-solid fa-angle-left"></i>' 
			},
			'search' : ' <i class="fa-solid fa-magnifying-glass"></i>',
			searchPlaceholder: "Search..."
			
		},
		
    });
	var table6 = $('#attendance-tbl').DataTable({
		//dom: 'Bfrtip',
		'dom': 'ZBfrltip',
		buttons: [
            
			{ extend: 'excel', text: '<i class="fa-solid fa-file-excel"></i> Export Report',
              className: 'btn btn-sm border-0'
			}
        ],
		searching: false,
		select: false,            
        lengthChange:false ,
		language: {
			paginate: {
				next: '<i class="fa-solid fa-angle-right"></i>',
				previous: '<i class="fa-solid fa-angle-left"></i>' 
			}
			
		},
		
    });
	var table7 = $('#empoloyees-tbl').DataTable({
		//dom: 'Bfrtip',
		'dom': 'ZBfrltip',
		buttons: [
            
			{ extend: 'excel', text: '<i class="fa-solid fa-file-excel"></i> Export Report',
              className: 'btn btn-sm border-0'
			}
        ],
		searching: false,
		select: false,   
        pageLength:5,			
        lengthChange:false ,
		language: {
			paginate: {
				next: '<i class="fa-solid fa-angle-right"></i>',
				previous: '<i class="fa-solid fa-angle-left"></i>' 
			}
			
		},
		
    });
	var table8 = $('#customer-tbl').DataTable({
		//dom: 'Bfrtip',
		'dom': 'ZBfrltip',
		buttons: [
            
			{ extend: 'excel', text: '<i class="fa-solid fa-file-excel"></i> Export Report',
              className: 'btn btn-sm border-0'
			}
        ],
		searching: true,
		select: false,   
        pageLength:9,			
        lengthChange:false ,
		language: {
			paginate: {
				next: '<i class="fa-solid fa-angle-right"></i>',
				previous: '<i class="fa-solid fa-angle-left"></i>' 
			},
			'search' : ' <i class="fa-solid fa-magnifying-glass"></i>',
			searchPlaceholder: "Search..."
			
		},
		
    });
	var table9 = $('#empoloyees-tbl2').DataTable({
		//dom: 'Bfrtip',
		'dom': 'ZBfrltip',
		buttons: [
            
			{ extend: 'excel', text: '<i class="fa-solid fa-file-excel"></i> Export Report',
              className: 'btn btn-sm border-0'
			}
        ],
		searching: false,
		select: false,   
        pageLength:5,			
        lengthChange:false ,
		language: {
			paginate: {
				next: '<i class="fa-solid fa-angle-right"></i>',
				previous: '<i class="fa-solid fa-angle-left"></i>' 
			}
			
		},
		
    });
	var table10 = $('#empoloyeestbl2').DataTable({
		//dom: 'Bfrtip',
		'dom': 'ZBfrltip',
		buttons: [
            
			{ extend: 'excel', text: '<i class="fa-solid fa-file-excel"></i> Export Report',
              className: 'btn btn-sm border-0'
			}
        ],
		searching: false,
		select: false,   
        /* pageLength:5, */			
        lengthChange:false ,
		language: {
			paginate: {
				next: '<i class="fa-solid fa-angle-right"></i>',
				previous: '<i class="fa-solid fa-angle-left"></i>' 
			}
			
		},
		
    });
	var table11 = $('#empoloyees-tbl1').DataTable({
		//dom: 'Bfrtip',
		'dom': 'ZBfrltip',
		buttons: [
            
			{ extend: 'excel', text: '<i class="fa-solid fa-file-excel"></i> Export Report',
              className: 'btn btn-sm border-0'
			}
        ],
		searching: false,
		select: false,   
        pageLength:8,			
        lengthChange:false ,
		language: {
			paginate: {
				next: '<i class="fa-solid fa-angle-right"></i>',
				previous: '<i class="fa-solid fa-angle-left"></i>' 
			}
			
		},
		
    });
	var table12 = $('#product-tbl').DataTable({
		//dom: 'Bfrtip',
		searching: false,
		select: false,
		pageLength:7,		
        lengthChange:false ,
		language: {
			paginate: {
				next: '<i class="fa-solid fa-angle-right"></i>',
				previous: '<i class="fa-solid fa-angle-left"></i>' 
			}
			
		},
		
    });
    
	table.on('click', 'tbody tr', function() {
		var $row = table.row(this).nodes().to$();
		var hasClass = $row.hasClass('selected');
		if (hasClass) {
			$row.removeClass('selected')
		} else {
			$row.addClass('selected')
		}
    })
    table.rows().every(function() {
		this.nodes().to$().removeClass('selected')
    });
	

    //example 2
    var table2 = $('#example2').DataTable( {
        createdRow: function ( row, data, index ) {
            $(row).addClass('selected')
        },

        "scrollY":        "42vh",
        "scrollCollapse": true,
        "paging":         false
    });

    table2.on('click', 'tbody tr', function() {
        var $row = table2.row(this).nodes().to$();
        var hasClass = $row.hasClass('selected');
        if (hasClass) {
            $row.removeClass('selected')
        } else {
            $row.addClass('selected')
        }
    })
        
    table2.rows().every(function() {
        this.nodes().to$().removeClass('selected')
    });
	
	// dataTable1
	var table = $('#dataTable1').DataTable({
		searching: false,
		paging:true,
		select: false,         
		lengthChange:false ,
		
	});
	// dataTable2
	var table = $('#dataTable2').DataTable({
		searching: false,
		paging:true,
		select: false,         
		lengthChange:false ,
		
	});
	// dataTable3
	var table = $('#dataTable3').DataTable({
		searching: false,
		paging:true,
		select: false,         
		lengthChange:false ,
		
	});
	// dataTable4
	var table = $('#dataTable4').DataTable({
		searching: false,
		paging:true,
		select: false,         
		lengthChange:false,
		
	});
   
	// dataTable5
	var table = $('#example5').DataTable({
		searching: false,
		paging:false,
		select: false,
		info: false,         
		lengthChange:false ,
		language: {
			paginate: {
			  next: '<i class="fa-solid fa-angle-right"></i>',
			  previous: '<i class="fa-solid fa-angle-left"></i>' 
			}
		  }
		
	}); 
	
	// dataTable6
	var table = $('#example6').DataTable({
		searching: false,
		paging:true,
		select: false,
		info: false,         
		lengthChange:false ,
		language: {
		paginate: {
		  next: '<i class="fa-solid fa-angle-right"></i>',
		  previous: '<i class="fa-solid fa-angle-left"></i>' 
		}
	  }
		
	});
		
		
	// dataTable7
	var table = $('#example7').DataTable({
		searching: false,
		paging:true,
		select: false,
		info: true,         
		lengthChange:false ,
		language: {
			paginate: {
			   next: '<i class="fa-solid fa-angle-right"></i>',
			  previous: '<i class="fa-solid fa-angle-left"></i>' 
			}
		  }
		
	}); 	
	// dataTable9
		
	// table row
	var table = $('#dataTable1, #dataTable2, #dataTable3, #dataTable4,  #example3, #example4').DataTable({
		language: {
			paginate: {
			  next: '<i class="fa-solid fa-angle-right"></i>',
			  previous: '<i class="fa-solid fa-angle-left"></i>' 
			}
		  }
	});
	$('#example tbody').on('click', 'tr', function () {
		var data = table.row( this ).data();
	});
   
	// application table
	var table = $('#application-tbl1,#application-tbl2,#application-tbl3,#application-tbl4 ').DataTable({
		searching: false,
		lengthChange:false ,
		language: {
			paginate: {
			  next: '<i class="fa-solid fa-angle-right"></i>',
			  previous: '<i class="fa-solid fa-angle-left"></i>' 
			}
		}
	});
	
	if(jQuery('#empoloyees-tblwrapper').length > 0){
		var empoloyeesTable = $('#empoloyees-tblwrapper').DataTable({
			dom: 'Bfrtip',
			buttons: [{
				extend: 'excel', text: '<i class="fa-solid fa-file-excel"></i> Export Report',
					className: 'btn btn-sm border-0'
				}
			],
			searching: true,
			select: false,
			lengthChange:false ,
			language: {
				paginate: {
					next: '<i class="fa-solid fa-angle-right"></i>',
					previous: '<i class="fa-solid fa-angle-left"></i>' 
				}
			},
		});
		$('#empoloyees-tblwrapper_filter').hide();
		
		// apply filters when button is clicked
		$('#applyFilter').on('click', function() {
			var status = $('#statusFilter').val().trim();
			var searchFilter = $('#searchFilter').val().trim();
			var gender = $('#genderFilter').val().trim();
			var department = $('#departmentFilter').val().trim();
			var location = $('#locationFilter').val().trim();
		
			// Apply filters only if values exist
			empoloyeesTable.column(7).search(status ? '^' + status + '$' : '', true, false);
			empoloyeesTable.search(searchFilter || '', false, false);
			empoloyeesTable.column(5).search(gender ? '^' + gender + '$' : '', true, false);
			empoloyeesTable.column(6).search(location ? '^' + location + '$' : '', true, false);
			empoloyeesTable.column(2).search(department || '', false, false);
			empoloyeesTable.draw();
		});
		$('#resetFilter').on('click', function() {
			$('#statusFilter, #searchFilter, #genderFilter, #departmentFilter, #locationFilter').val('');
			empoloyeesTable.search('').columns().search('').draw();
		});
	}
	
	if(jQuery('#reports-tbl').length > 0){
		var reportsTable = $('#reports-tbl').DataTable({
			'dom': 'ZBfrltip',
			buttons: [{
				extend: 'excel', text: '<i class="fa-solid fa-file-excel"></i> Export Report',
				className: 'btn btn-sm border-0'
			}],
			searching: true,
			select: false,   
			lengthChange: false,
			language: {
				paginate: {
					next: '<i class="fa-solid fa-angle-right"></i>',
					previous: '<i class="fa-solid fa-angle-left"></i>' 
				}
			},
		});
		
		$('#reports-tbl_filter').hide();
		
		// apply filters when button is clicked
		$('#applyFilter').on('click', function() {
			var status = $('#statusFilter').val().trim();
			var searchFilter = $('#searchFilter').val().trim();
			var gender = $('#genderFilter').val().trim();
			var location = $('#locationFilter').val().trim();

			// Apply filters only if values exist
			reportsTable.search(searchFilter || '', false, false);
			reportsTable.column(3).search(gender ? '^' + gender + '$' : '', true, false);
			reportsTable.column(4).search(location ? '^' + location + '$' : '', true, false);
			reportsTable.column(5).search(status ? '^' + status + '$' : '', true, false);
			reportsTable.draw();
		});
		$('#resetFilter').on('click', function() {
			$('#statusFilter, #searchFilter, #genderFilter, #locationFilter').val('');
			reportsTable.search('').columns().search('').draw();
		});
	}
	
})(jQuery);