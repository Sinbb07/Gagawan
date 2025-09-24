@section('title', 'Assign Reviewer')
<x-superadmin-layout>
    <!-- Main Content -->
    <main class="xl:ml-[335px] max-xl:ml-auto p-4">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            ASSIGN REVIEWER
        </h2>
        <br>

        <table id="myTable" class="display overflow-scroll border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-lg:text-base/7">
                <tr class="header-table">
                    <th class="w-[20.00%]">Protocol ID</th>
                    <th class="w-[20.00%]">Research Title</th>
                    <th class="w-[20.00%]">Assigned Reviewer</th>
                    <th class="w-[20.00%]">Date Reviewed</th>
                    <th class="w-[20.00%]">Accept/Reject</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
                <tr>
                    <td>001</td>
                    <td>Brain Injury: Prevention and Treatment of Chronic Brain Injury</td>
                    <td>N/A</td>
                    <td>08/10/2025<br>18:06:25</td>
                    <td>Accepted</td>
                </tr>
            </tbody>
        </table>
    </main>
</x-superadmin-layout>