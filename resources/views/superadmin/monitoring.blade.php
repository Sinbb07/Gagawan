@section('title', 'Monitoring Status')
<x-superadmin-layout>
    <!-- Main Content -->
    <main class="xl:ml-[335px] max-xl:ml-auto p-4">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            MONITORING STATUS
        </h2>
        <br>

        <table id="myTable" class="display overflow-scroll border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-lg:text-base/7">
                <tr class="header-table">
                    <th class="w-[25.00%]">Approval of Accounts</th>
                    <th class="w-[25.00%]">Assignment of Forms</th>
                    <th class="w-[25.00%]">Student Submission</th>
                    <th class="w-[25.00%]">Review Approval Date</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
            </tbody>
        </table>
    </main>
</x-superadmin-layout>