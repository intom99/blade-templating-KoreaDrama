@extends('layouts.app')

@section('title','Channels')

@section('content')

    <!-- breadcumbs -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                Channels
            </h1>
        </div>
    </header>

    <!-- table -->
    <div class="pb-16 pt-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8  lg:flex-row flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                               
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Detail</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200">

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHcAAAB3CAMAAAAO5y+4AAAA4VBMVEX///8AjdAAVI4ATIoAis8AT4sAUo1Vg6sAjdL6picAiM5Hc6AAjNOIo7+etswAjNUASIhdh67/pxr6oxoAQoX2+/1Yf6j8xoRkqtuUyeifzurl8vn/pwtVq9wAXJT7sEH/+vP+7NP6rDP81aP7ul3I1+NJe6bA4fJ+wORrsd7b7fcknNYIldTM5PM9o9kWkLkAjsRVk62cm33JoUXmpSqrnWpklKXBn1rUok2yx9lznLy+nmQkbp9nkbT8zJNBk7neoz2FmI6knHL7vmuu2O793bPMoFZ4laXfokqNmoMtZZhtEqxfAAAEYElEQVRoge2Ya3eiOhSGQQgCBUGQsYpadbyiY22P04tTptPLnLb+/x90coWgoLPmLPop7weVZK887r2TnQRJEhISEhISEhISEhISEhISEhIS+h8KwmlrNj+Hmrej4LOo09nCNE0VC/5YtqJPoUKoKvNS1e630rEtPQslZHless9tUz/EyrJuqq1ysXlUQl6F5WFV3lsdig/2oizwtzTIluM4+uXl2nGspM1clLOkIjX19Or6H6MDtfl+IzuMbM7LwAZdllx9fWt4voHlGXc3MgXrMree7utnTHVJqiUPZ1+2Y2oyjnmTIr2m2DsPEn0k9O39WDvU4W5iXXUB0ICC5D5Ikg0fAXpEn404yDEp0jKD9Y1R82dzhN32No8ErCbc2K1AgUkdaQu5CnzsVauTHvrhVqHJFploSmJywl3duvUM/+JrHzX2B00UbP/XJQ71gsU56mkIey8FSBLhgi/oYQsQbiyFFWxSS0wK1KWzynrqGP6on7QPcJafkcPqijWOsS+7dGERLv6J/pJbk6LGnkm+Qubuemj4L3xPH4GHa+SwOWNcPCgYJ0Yc94HnavcnuCzMzrVnXPQzXdBj74kk2JzSf4njrPWSUVNu0KMZICanwDOVLpV33/u91/fi+/+StaR2aaZsPK80hY2acMM6zC9A4aUmJ8Bzyn3c+HvuQoc7qcNsZlUVAq6lXDihK5qLsBpOQD1rcpRr3Rh+c7+vPzSMX5SbbEuxguMIbI5LpE3IZAq2pFGxj3DPKffN878edI58o+PslcogJqO6tYSroboBvx6Yh1tXwyZHwBx3P70owYfc7KiIq+1s2441UNEaMTMhoXaLywbjXhn5/m5oxZpxzXaawHQ+h2eA89A+leN0Xnl/ll8yKs6xEvDrd4xQgFWoGpnVoKh+zNN1lDufnym3nekh7sAUc9wILWA3XdnHU9xidePjMMEwvcNHPY8rATSqEh/4mwY22OE6HUv5mqZ1ct/h37BeXbOdMHuujADelup8vZqAzNoZ9yrHuAE7WlkfHX/E98D67N8tSa+6InkLa1g2roXMX22HmnaAhD5rUsiV5mzbd249fzRI2gdoB760qLuv1IkG3s7xtEryi9cvbWoEByYF4o4bPzx/+LOPgt0fvBjprgCPlCx4blqe4GQNMvWKRCBrUineDxfsWKfLTx0P+txsvlx0oLed7/Q8q6vTHC5Am0OGqym7IGOiNY5sDtP0OOmsnzeQjM5Xvrd5YkfZZPuFcQZU8OiENgFyvmJNccibAHd3dE+ap5cF3Vp/vA89z9i8f6wZlk0qxJ1UqeJ73FhLGqp1e5xrUqhwwV3JdEe+enu7ubSS07NulnU3C5f8XVDXLcviLipq+/QIf6loVXgv486wJSjs5t9DIXZZ7g24JeeSzZKx0OWZrB6QzW55l99E0UzPvOFQzWX7c17qBO0V90JnVd5EPiRHLfz+6nz2Gn7aCywhISEhISEhISEhISEhISEhISFe/wGeuWeNEWcyCAAAAABJRU5ErkJggg==" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                SBS
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                https://www.sbs.co.kr/
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Detail</a>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="https://yt3.ggpht.com/ytc/AAUvwnjIjESZhuhr9IXzwD3R8emDuJU3XWap7Y3BXhX8Fw=s900-c-k-c0x00ffffff-no-rj" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                JTBC
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                https://jtbc.joins.com/
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Detail</a>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="data:image/png;base64,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" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                tvN
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                http://tvn.tving.com/tvn
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Detail</a>
                                </td>
                            </tr>
                         
                        <!-- More items... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection