@extends('master')
@section('style')
    <style>
        .site-title{
            color: blue
        }
        span{
            font-size:22px;
        }
        .notifyjs-bootstrap-base{
            padding: "5px";
        }
        .card-footer{
            color:black;
        }
    </style>
@endsection
@section('content')
@include('layouts.header') 
    <br> 
    <br>  
    <div class="container col-sm-8">
        <div class="banner">
            
            <div class="banner-image"></div>
            
            <div class="primary-wrapper">
            
            <h4 class="site-title">@lang('sample.welcome_to_dashboard')</h4>
            <hr>
            <div class="row">
                <div class="form-group col-sm-6 col-xs-6" >
                    <div class="card">
                        <div class="card-body" style="background-color:#2f5f92;
            color:white;">
                            <div class="row">
                                <div class="col-sm-8 col-xs-8">
                                    <center>
                                        <h2 class="card-title">{{ count(@$products) }} 
                                        <br>
                                        @if(count(@$products) > 1)
                                            <span>@lang('sample.products')</span></h2>
                                        @else
                                            <span>@lang('sample.product')</span></h2>
                                        @endif
                                        
                                    </center> 
                                </div>
                                <div class="col-sm-4 col-xs-4">
                                    <center>
                                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxASEBITExIVFRUXFxUYFhUXFhUVGBUYFRUWFhUXFxUYHSggGBolGxUVITEhJSorLi4uFx8zODMtNygtLisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEBAAIDAQEAAAAAAAAAAAAAAQYHAgUIBAP/xABHEAABAgMEBgUIBwYFBQAAAAABAAIDETEEBSFxBgcSQVFhE4GRobEiI0JSYpKi8TIzU2NysvAUJCWzwcI0Q3OC0RU1o9Lh/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AN3pPgh4Kch8kFJ3BCd29SmASmaCkyzQmSlM0pia/qiCzlVJ7ypzPyTmUFB3lAVK5JXLxQUGeSTnkuJeCdmYy3nIcFeQQWfBCdwU5D5JTAIKTuCEyzUpmlOZQUmSTlVSmJqoXASLiATTHuHEoOU95QHeVOZSuJogoKAzyUrl4pXLxQUGeST4KVwCch8kFJ3BCdwUpgEpmgpParNcacyqBKtUFVUVQcSdwUpgFSeFVKZoFM0pmlM0piUCmJqnM/JdFemmNgs8+ktDS4egzzjhyIbORzksNvTWvP8Aw9nydFP9jD/cg2gBvK6u9dILHZ/r47GS9Cc3n/Y2bj2LSl66YXhaJh9ocGn0Ifm25eTiRmSuhQbZvbWrAExAgvie089G085YuIzAWH3rp/eMeY6UQm+rCGz8Zm7sIWLIg/dlriiIIoiO6QGYibRLgRv2jity6C6attjRBiSZaAMhEAq5nPi3rpTSi5QormOa5ri1zSC1wMiCKEEUKD0zTAJTNYVoFpu21AQIxDbQBgaCMBvHB0qt6xvAzWmaBTmUpiapTE1XT6T6RQbDB6SLi8zEOGDi88BwAwm7d2Ahy0kv+DYoJixTMnBkMfSe7gP6nctF3/fca2RjGjOmfRaPowxua0bs6lcb8viNa4zo0Z03HAAfRY3c1o3DxqvgQd5demFvs8gy0OLR6ETzjcvKxAyIWY3XrXnIWmz5uhH+x5/uWslEHoC6tL7BaZCHaGgn0HzhuPIB0p9U13lcBTj/AMLzGV2l1aRWyzS6G0RGgejPaZ7jpt7kHojkPklMAtUXVrVjNkI8Brx60M7Ds9kzBPWFmN06e3dGAAi9G4+jGGx8X0ewoMmpmlOZUhvBAIIdOhGIOR4K0xNUCmJqqBvKnMqgbygqqk1UHEmWaxq/tN7DZHOY97nxRVkNu0RhMAkyaMpzWSkyWn9ZWiMWDFiWtk3woji6JxhOdWfFhO/dOR3IP1vTWpaHTECCyH7TyYjuoCQHesQvS/7Xafro8R49Weyz3Gyb3LrEQAqiICiIgKoiAiIgrHkEEEgggggyIIxBBFCtv6Aaci0SgWggR5SY+gjAbuT+W/dwWnlQZYjAjEEYEEUIPFB6A0q0lg2GFtxPKiOmIcIHFx/o0YTd/WQWjL5vaNaozo0Z2049jRua0bmj9Yr8rwt8aO/pI0R0R8gNpxmZNEgP1xPFfOgIiiAiKoCIiAoqog+y7b1tFnM4MZ8Pk1xAObaHrCzC6taNrhy6aGyMOP1bu0At+FYGqg3dcmsOw2hzWuc6C9xAa2IMCTgJPbMdsllwxWi9B9Eoltih5myAxw23+sRjsM4nid3YFvQY5eKDlNERBxOGK4vYCDtAEEEEHESNQRvXI8SpzKDT2n2gxs21aLO0mAcXsqYPMcWeGVMFXpsidacOOa1Jp/oKYO1abK0mFiYkMVh8XMH2fLdlQNfqIiAqiiCovvuy5LVaPqYESJzAk33zJo7VmF16rLS6RjxWQh6rfOPyNGjtKDAF+9isMaM7ZhQ3xDwY0ulnKi3Tdery7oEi6GYzuMU7Q9wSaesFZRAgMhtk1rWtFGtAAGQCDTd16s7dEkYpZAb7R23+6zDtIWYXVqxsUOToxfGPBx2Ge6zHqJKzfmUriaIMVvLV7d0YTEIwTuMI7Pa0zb3LD701V2hszZ4zIg3NeDDd2iYPcttVy8Url4oPOt53Da7P9dAiMHrSmz32zb3rrV6cOOG7f/wugvbQy77QTtWdrXb3w/NnM7ODjmCg0Gi2Xe2qhwmbNaAfYiiX/kYP7Vh166J2+zz6Szv2fXZ5xuc2TkM5IOlRQFEBFUQFlOhGh0S3P23zZZ2nyn0LyKsZ/U7s1z0G0MfbX9JEmyztOLqGIRVrOXF27djTdVlszGMaxjQyG0ANaBIABBLHZYcOG2HDaGQ2iTWjASH661+855KVy8VZ8EHJFJKoOJG8qVyVIUrl4oFcvFDjl4pXJY3pzpS2wwPJkYz5iG3hxeR6o7zIcZBrXWXdtkgWvZs5kXDaiwgPJhkylsndMTOzuw4gLElzjRXPc57nFznElzjiSTiSVwQfVdv7Pt/vHS7H3QYXfGZLZ+jL9HhLo+j6TjaZ7U+RieSD+FamUQemoTm7ILSCDQiRByluXKmJr+qLzZYbwjQDODFiQz7DnNnmAcetZTdusm8IctssjD22yd1OZLvBQbq5lOZWvrt1q2ZxHTwYkM8WkRGjmaO7isqu3Sew2gjo7TDJ3MJ2He46RQdvXE0SuXilcvFK5eKBXLxSuASuATkPkgch8kpgF8V43vZrOPOxocP8TgD1NqVi146zrDDmIQiRjxDdhvW58j2AoM2pmlM1p68daNsfMQocOCDvxiO7TIfCsVvK/bXaJ9NaIjwfRLiG+4JN7kG3NKIlxna/ajAL9+xjFynC8rtWqL+Fg2v3Qx5Tx6UM2ZeyQdrtC6kBVAXbaKWOzxrXCh2h5ZDcZYYbR9Fhd6IJwn4TmOpUQemLPAaxrWMaGsaAGtAkABQAbgv0rl4rBdWulv7SwWaM7zzB5LicYrBz9cb+Ix4rOq4BArgFZ7gpyHyVpgEFkqoqg4kTyUrkqccl+VqtLIbHPe4NYwEuccA0ATKD4tIL5hWSA+NEPktwAFXuP0WN5nuEzuWg76vWLao740U+U6gFGNH0WN5D/k712Wmmkz7dHmJtgsmITOW97vaPcJDiTj6AiIgKIiAqiIChCqiDsrtv612eQg2iIwD0dolvuOm3uWVXdrStjJCLDhxRxE4Tu0Tb8KwNc4UNznBrQXOJAAAmSSZAAbyg2JeGteKRKBZ2M9qI4v8AhbLxKxa8dMLwjzD7S8D1Yfmx8EieslfDflzR7JF6KM3ZdIOEjMEEbjvkZg8wvgQDUneanecyiKICqiqAiKICIqg/Sy2h8N7YjHFr2kOa4VBFFvjQ3SVlus4cJNitkIrPVO5w9l2JHWNy0Guy0evuLY47Y0M0wc3c9hq0/wBDuIBQeieQVGGG9fFc95wrTAZGgnaa8T5g+kHcCDgV9owzQckUVQcTwWndZWl37Q82WA7zLD5bh/mvB72NPacdwW27xs5iwokIOLdtj27Qq3aaW7Q5ic1pK8tX14wZyhCKBvhODsPwmTu5Bi6L9LTAfDdsxGOY71XtLT2HFfmgKIiAqiICIogIiqCLbGrHRLo2ttcZvnHDzTT/AJbSPpkesRTgDzw6DVtol+0xBaIzZwWHyWmkV448WNNeJw4rcdM0HQ6Y6NQ7bZ+jMhFbN0J/qu3g+yaHqNQFoe12Z8KI6HEaWvYS1zTUEfqq9LU5lYPrJ0R/aYf7RCHn2Dymj/NYNwG9w3cacJBptEVQERRARFUBERAURcobC5wa0FzjRoBJOQGJQZPoFpUbDGk8kwIhHSD1TQRAOW/iMgt5QntIDgQ4OAIIxBBxEjwWh7u0GvGNIiAWA+lFIh/CfK7lubRi6nWWyQYD37bmNkXYymXF0mz3CchyAQdqqoqg4k7gpTNUmWalM0H5Wqyw3t2YjGxAfRc0OB6jgsavLV5d0WZ6IwnHfCcW9jDNvcsqpiapzKDVd5aqIomYFoa7g2I0tPvtmCeoLFby0NvCBMvszyPWhyiD4JkdYC38BvK6mBpNYXxCwWqDtAy2dtomeU/pdU0HnoiRIOBFRvGYRej7fdVmtI87BhxBuLmgnqNR1LFrx1ZWCLMwjEgn2XbTZ/hfMyyIQaYRZ7eOq21tn0MWHFHAzhu7DMd6xW8tHrZZ59LZ4jAKu2dpvvtm3vQdau/0N0afbo4ZiITZGK/gNzR7Rl1YncusuW64tqjsgwhNzjXc0ek53AD/AOVK39cFzQrHAbAhCmLnGr3H6T3frAADcg+2y2dkJjYcNoa1oAa0UAFF+lOZSnMpTE1QKYmqcynMpzKDU+s7RLonG2QW+bcfOsHoOJ+mPZca8DnhrxemYsJr2lrwC0ggtOIIIkZjhJaL060XdYY02zMCISYTju4w3HiN3EdaDGUX12C7Y8cygwYkT8DHOAzIEh1rKbs1aW+LjE6OCN+07ad7rJjvCDDFCVt67dVllbLposSKd4EobOwTd8Syu7tHrHZ5dDZ4bXD0tkFw/wB5me9Boy7NGrbaJdFZ4hB9IjYb7z5A9Syq7tVdpdLpo0OHyaDEd1/RA7StkW7SSxQDsxLTCa71S8EjmQMQM12UOI0tDmkODgCCDMOBxBBG5BiF3atrvhSL2vjO9t0h7rJCWc1lFhu+BAbKFCZDHBjGtn2DFfTTE1TmUDmVQN5U5n5KjHFBZqqTVQcSZKUxNVThipzPyQOZ+ScynMpXE0QfNeRPQRTTzb5e6cV5raMAvSl6YwI3Do39fklea20CD77vve0wPqY8SGODXEN92h7FlF3azbfDkIghxh7Tdh3U5kh8JWEqoNvXdrTsjpCLCiQTxEojR1iTvhWUXbpJYo8hBtENxPo7Wy73HSd3LzyoQg9LwrNDYSWMaHOqQ0AuzIqv1pmvO93aRW2z/VWiI0cNrab7jpt7llN260rWz66HDjDiJw3dom3uCDb9MTVOZWEXbrPsL/rREgniW7bRkWTPaAswsFthR4Yiw3tew/Rc0zGGB6+SD9+ZSuJouEaM1rXPe4NY0EkuMgAMSSTRYheWsu74cwwxIxG5jJD3nywymgzKuXiuEeCyINlzWubvDgHA9RWqLz1q2l0xBgQ4Y4vJiHsGyB3rFrx0qt8f6y0xCPVaejblsskD1oN5XhfVks4lEjQoQHolzQcmsGJ6gsYvLWhYWYQmxIp4huw3tfj3LTaqDOrx1o2x8xBhw4I4yMR46zJvwrFrxv8AtkefS2iI8H0dohvuNk3uXWogALf2gZ/htkP3YHeZBaBW/tAv+22Q/djxKDvuZTmfknM/JK4lAriVRjl4qVy8VZzy8UHJERBxPEqcyqRvKlcTRAriaJXLxSuXilcvFB816GcCNw6N/wCUrzW2gXpS9D5iMB9m/wDKV5sbQIKiIgIiiAiKoC3Dqe/wMSdBHf8AkhrTy3DqeE7DE4dO78kNB2mskn/pdp4Sh9fnWLRK3trKM7rtPDzfX51i0UgIiICiIgIiqAt+6BD+G2Qn7MeJWglv3QIfw2yT+zHiUHfVxKVy8Url4pXLxQK5eKs+ClcBRWe4IOUkUkqg4kKVy8VSJ5KVy8UCuXilcAlcAnIfJB816HzEYD7N/wCUrzY2gXpO9MIEYD7N/wCUrzY2gQVEUQFVFUBEUQFuLU8J2GJw6d35Ia06txanv8DEH37vyQ0Haayj/DLTL7v+axaKW9dZR/hdoA+7/msWikBREQERVAREQFv3QITu2ycOjHiVoFb+0CE7tsnDox4lB31cvFK4CiVwFE5BA5BXkFOQVpggqqiqDiRPJSuAVPBTkPkgch8kpgEpgEpmg+a9MIEbj0b/AMpXmttAvSt5N8xFFSWP6/JK81MoEFVUVQERRARFUBbh1PH9xiAfbu/JDWnluHU8f3GIB9u78kNB2msrC67QP9P+axaJW9tZOF12gf6f81i0SgIiqAiIgKIiAt/aB43bZB92PErQS37oJP8A6bZB92D1EkhB33IJyCcglMBVApgKqjDNSnMqjDNBVVFUHEncFKYBUncFKZoFM0pzKU5lKYmqBTE1/WCxu9NBbujzc6CGOMyXQyWYnfIeST1LJOZTmUGsbx1T1MC05Nit8Xs/9Vi946B3lBx6AxG8YRD/AIfpdy3tXE0SuXig8zRoTmO2Xtc13quBaew4rgvS1rskOMNmJDY9vBzQ4HqKxm8dXd3Rp7MN0I+tCcW9jXTb3INIItj3jqoiCfQWhrvZiNLT77Zz7AsWvLQy8YE9qzPcB6UPzo7GTI6wEHQrcOp4/uMTj07vyQ1p57SCQQQRUHAjMLcWp/CwxMKx3y5+RDQdnrJErrtHHzf81i0St76yG/wu07zJndFYT1LRCCou5u7RS3x/oWaJL1njo25zfKfVNZTduqm0OkY8eHDHBgMQ9p2QO9Br1VjS4gAEk0AEycgFum7NWt3w8XtfGP3jpD3WSEs5rJ7Dd0CEJQYTIbfYa1s+wYoNHXboVeMeRbZ3NafSiShjsd5XYFlF26qIhkY9pa0b2w2lx6nulL3StpnHAJyCDFLu1e3dCl5oxSPSiuLvhEm9yyprQ0BrQAAJADAACmCvIJTAVQKYCqU5lKcylM0CmaoG8qUxKoG8oKqiIOJPapTNcioBLHeglMTVOZVA3lAN5QTmUriaKynVJTy8UErl4pXLxVOOSHgglcAnIfJU8AlMAgnIJTAVVpSqSlzKD5LfdlnjCUaDDi/jY13ZMYL9bJZYcFgYxjWNGAa0BoHIAL9gJY70A3lBwiQ2lpDwCCCCCJgg1BBqvku+5rLAxhQIUP8ACxrT2gL7gN5SU6oJXEpXLxVlPLxQ45eKCVy8UrgKKngh4BBOQTkFeQSlEEpgKpTmVZS5lAJZoJTNKYlUDeUA3lBOZ+SoxxKSniUrkgs1URBEVRBEKqIBREQFAqiCBFUQFFUQRFUQQoVUQEREAKBVEERVEERVEEVREEKqIgiIiD//2Q==" alt="" style="width: 100%;">   
                                    </center>
                                </div> 
                            </div>                       
                        </div>
                        <div class="card-footer">
                            <center>
                                <a href="{{ route('product.index' )}}#" class="btn btn-default">@lang('sample.more_info') 
                                <i class="fa fa-arrow-right"></i>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>      
                <div class="form-group col-sm-6 col-xs-6">
                    <div class="card" style="width:100%">
                        <div class="card-body" style="background-color:#328c4a;
            color:white;">
                            <div class="row">
                                <div class="col-sm-8 col-xs-8">
                                    <center>
                                        <h2 class="card-title">{{ count(@$categories) }} 
                                        <br>
                                        @if(count(@$categories) > 1)
                                            <span>@lang('sample.categories')</span></h2>
                                        @else
                                            <span>@lang('sample.category')</span></h2>
                                        @endif                                
                                    </center>
                                </div>  
                                <div class="col-sm-4 col-xs-4">
                                    <center>
                                        <i class="fa fa-pencil"></i>    
                                    </center>
                                </div>
                            </div>                         
                        </div>
                        <div class="card-footer">
                            <center>
                                <a href="{{ route('category.index' )}}" class="btn btn-default">@lang('sample.more_info')
                                <i class="fa fa-arrow-right"></i>
                                </a>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>          
            </div>
            
        </div>
    </div>
    <!-- ProductModal -->
    <div class="modal fade" id="ProductModal" tabindex="-1" role="dialog" aria-labelledby="ProductModalLabel" aria-hidden="true">
        @include('admin.modal.product_modal')
    </div>
    <!-- ProductModal -->
    <div class="modal fade" id="CategoryModal" tabindex="-1" role="dialog" aria-labelledby="CategoryModalLabel" aria-hidden="true">
        @include('admin.modal.category_modal')
    </div>   
@endsection
@section('script')
    <script>
      $("#save_change").click(function() {
            var category_name = $('#category_name').val();
            if(category_name == '' || category_name.trim() == ''){
                $.notify("This field name is required", "error");
            }else{
                $.ajax({
                    type: "POST",
                    url: "category/store",
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'name': category_name
                    },
                    dataType: "json",
                    success: function(data){
                        $.notify("Category created succesfully", "success");
                        $('#category_name').val('');
                    },
                    failure: function(errMsg) {
                        alert(errMsg);
                    }
                });
            };
      });
    </script>
@endsection