<script>var hostUrl = "https://preview.keenthemes.com//assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.bundle.js')}}  "></script>
{{--<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>--}}
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="{{asset('/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>

<script>
        let aff=$("#desplay").val();
        if(aff == "projets"){

            $("#mode").show();
            $("#affichage1").html("Liste")
            $("#affichage").html("Map")

        }else if(aff =="calendrie"){
            $("#mode").show();
            $("#affichage1").html("Liste")
            $("#affichage").html(" Calendrie")

        }else {
            $("#mode").hide();
            $("#link").hide();
            $("#affichage1").html("Liste")

        }
        $(".date").flatpickr();
        $(".datetime").flatpickr({
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            defaultDate:Date.now()
        });
        $("#kt_datatable_example_1_filter").css("display", "none");
        $("#map").hide();
        $("#back").css("display", "none");


</script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/new-target.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
{{--<script src="{{asset('assets/js/tabs.js')}}"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.2/leaflet.js"  > </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wicket/1.3.2/wicket.js"  > </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wicket/1.3.2/wicket-leaflet.js" > </script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>



<script>


    $("#btn").on("click", function() {
        $(".excelButton").trigger("click");
    });
    function GenererFacture(){
        const data={
            "id_client":$("#id_client_fa").val(),
            "id":$("#id_projet_map").val(),
            "montant":$("#montantfa").html(),
            "avance":$("#avancefa").html(),
            "reste":$("#restefa").html(),
            "numero_ordre" : $("#num_ordre_fa").html()
        }
        console.log(data)
        $.ajax({
            type: 'POST',
            url: 'generer_facture',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:data ,
            xhrFields: {
                responseType: 'blob'
            },
            success: function(blob) {
          //      console.log(blob)
                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = "tot.docx";
                document.body.appendChild(link);
                link.click();
            },
            error: function (xhr) {
                console.log(xhr.responseText);
            }
        });
    }

</script>
<script>
    function duplicateRow(button) {
        const currentRow = $(button).closest('tr');
        const clonedRow = currentRow.clone(true);
        currentRow.after(clonedRow);
    }
</script>


