<div :class="[$store.app.menu=='horizontal' ? 'max-w-[1704px] mx-auto xxl:px-0 xxl:pt-8':'',$store.app.stretch?'xxxl:max-w-[92%] mx-auto':'']" class="p-3 md:p-4 xxl:p-6 space-y-4 xxl:space-y-6">
        <!-- Breadcrumb -->
        <div class="white-box xxxl:p-6">
          <div class="n20-box xxxl:p-6 relative ltr:bg-right rtl:bg-left bg-no-repeat max-[650px]:!bg-none bg-contain" style="background-image: url(assets/images/breadcrumb-el-1.png)">
            <h2 class="mb-3 xxxl:mb-5">Invoice List</h2>
            <ul class="flex flex-wrap gap-2 items-center">
              <li>
                <a class="flex items-center gap-2" href="index.html"> <i class="las text-lg xl:text-xl xxl:text-2xl la-home shrink-0"></i> <span>Home</span></a>
              </li>
              <li class="text-sm text-neutral-100">•</li>
              <li>
                <a class="flex items-center gap-2" href="#"> <i class="las text-lg xl:text-xl xxl:text-2xl la-layer-group shrink-0"></i> <span>Invoice</span></a>
              </li>
              <li class="text-sm text-neutral-100">•</li>
              <li>
                <a class="flex items-center gap-2 text-primary-300" href="#"> <i class="las text-lg xl:text-xl xxl:text-2xl la-layer-group shrink-0"></i> <span>List</span></a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Invoice List -->

        <div class="grid grid-cols-12 gap-4 xxl:gap-6">
          <div x-data="chart" class="col-span-12 grid grid-cols-12 4xl:grid-cols-10 gap-4 xxl:gap-6">
            <div class="col-span-12 sm:col-span-6 lg:col-span-4 xxxl:col-span-3 4xl:col-span-2">
              <div class="white-box xl:p-6">
                <p class="m-text font-medium bb-dashed-n30">Total Income</p>
                <div class="flex justify-between items-center">
                  <div class="grow">
                    <h4 class="mb-4">$981.56</h4>
                    <p class="m-text">40 Invoices</p>
                  </div>
                  <div x-ref="progressPrimary"></div>
                </div>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-4 xxxl:col-span-3 4xl:col-span-2">
              <div class="white-box xl:p-6">
                <p class="m-text font-medium bb-dashed-n30">Paid Invoices</p>
                <div class="flex justify-between items-center">
                  <div class="grow">
                    <h4 class="mb-4">$981.56</h4>
                    <p class="m-text">40 Invoices</p>
                  </div>
                  <div x-ref="progressSecondary"></div>
                </div>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-4 xxxl:col-span-3 4xl:col-span-2">
              <div class="white-box xl:p-6">
                <p class="m-text font-medium bb-dashed-n30">Pending Invoices</p>
                <div class="flex justify-between items-center">
                  <div class="grow">
                    <h4 class="mb-4">$981.56</h4>
                    <p class="m-text">40 Invoices</p>
                  </div>
                  <div x-ref="progressWarning"></div>
                </div>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-4 xxxl:col-span-3 4xl:col-span-2">
              <div class="white-box xl:p-6">
                <p class="m-text font-medium bb-dashed-n30">Overdue Invoices</p>
                <div class="flex justify-between items-center">
                  <div class="grow">
                    <h4 class="mb-4">$981.56</h4>
                    <p class="m-text">40 Invoices</p>
                  </div>
                  <div x-ref="progressError"></div>
                </div>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-4 xxxl:col-span-3 4xl:col-span-2">
              <div class="white-box xl:p-6">
                <p class="m-text font-medium bb-dashed-n30">Draft Invoices</p>
                <div class="flex justify-between items-center">
                  <div class="grow">
                    <h4 class="mb-4">$981.56</h4>
                    <p class="m-text">40 Invoices</p>
                  </div>
                  <div x-ref="progressDark"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-12">
            <div
              x-data="{activeTab:'all',filteredInvoices:[], invoices:[{ id: '#854587', checked:false, name: 'Jenny Wilson', createdAtDate: '17 Feb 2024', createdAtTime: '12:23 AM', dueDate: '17 Feb 2024', dueTime: '12:23 AM', img: './assets/images/users/user-sm-1.png', amount: '$4,576,158', sent: 3, price: '$25.00', status: 'Draft' },
            { id: '#854588', checked:false, name: 'Mary Cousar', createdAtDate: '18 Feb 2024', createdAtTime: '2:45 PM', dueDate: '18 Feb 2024', dueTime: '2:45 PM', img: './assets/images/users/user-sm-2.png', amount: '$2,867,459', sent: 2, price: '$35.00', status: 'Overdue' },
            { id: '#854589', checked:false, name: 'David Buckley', createdAtDate: '19 Feb 2024', createdAtTime: '9:12 AM', dueDate: '19 Feb 2024', dueTime: '9:12 AM', img: './assets/images/users/user-sm-3.png', amount: '$1,275,968', sent: 1, price: '$45.00', status: 'Paid' },
            { id: '#854590', checked:false, name: 'Lisa Muller', createdAtDate: '20 Feb 2024', createdAtTime: '6:30 PM', dueDate: '20 Feb 2024', dueTime: '6:30 PM', img: './assets/images/users/user-sm-4.png', amount: '$3,548,297', sent: 4, price: '$20.00', status: 'Pending' },
            { id: '#854591', checked:false, name: 'Brian Good', createdAtDate: '21 Feb 2024', createdAtTime: '11:15 AM', dueDate: '21 Feb 2024', dueTime: '11:15 AM', img: './assets/images/users/user-sm-5.png', amount: '$5,762,354', sent: 5, price: '$30.00', status: 'Draft' },
            { id: '#854592', checked:false, name: 'Amanda Lee', createdAtDate: '22 Feb 2024', createdAtTime: '3:45 PM', dueDate: '22 Feb 2024', dueTime: '3:45 PM', img: './assets/images/users/user-sm-6.png', amount: '$1,987,652', sent: 2, price: '$40.00', status: 'Overdue' },
            { id: '#854593', checked:false, name: 'John Smith', createdAtDate: '23 Feb 2024', createdAtTime: '8:00 AM', dueDate: '23 Feb 2024', dueTime: '8:00 AM', img: './assets/images/users/user-sm-1.png', amount: '$4,235,789', sent: 4, price: '$55.00', status: 'Paid' },
            { id: '#854594', checked:false, name: 'Emily Roberts', createdAtDate: '24 Feb 2024', createdAtTime: '10:30 PM', dueDate: '24 Feb 2024', dueTime: '10:30 PM', img: './assets/images/users/user-sm-2.png', amount: '$2,145,678', sent: 3, price: '$65.00', status: 'Pending' },
            { id: '#854595', checked:false, name: 'Michael Johnson', createdAtDate: '25 Feb 2024', createdAtTime: '5:15 PM', dueDate: '25 Feb 2024', dueTime: '5:15 PM', img: './assets/images/users/user-sm-3.png', amount: '$6,789,012', sent: 6, price: '$75.00', status: 'Draft' },
            { id: '#854596', checked:false, name: 'Jessica Davis', createdAtDate: '26 Feb 2024', createdAtTime: '1:45 AM', dueDate: '26 Feb 2024', dueTime: '1:45 AM', img: './assets/images/users/user-sm-4.png', amount: '$3,456,789', sent: 4, price: '$85.00', status: 'Overdue' },
            { id: '#854597', checked:false, name: 'Andrew Wilson', createdAtDate: '27 Feb 2024', createdAtTime: '7:30 PM', dueDate: '27 Feb 2024', dueTime: '7:30 PM', img: './assets/images/users/user-sm-5.png', amount: '$1,234,567', sent: 2, price: '$95.00', status: 'Paid' },
            { id: '#854598', checked:false, name: 'Sarah Thompson', createdAtDate: '28 Feb 2024', createdAtTime: '9:00 AM', dueDate: '28 Feb 2024', dueTime: '9:00 AM', img: './assets/images/users/user-sm-6.png', amount: '$5,678,901', sent: 5, price: '$105.00', status: 'Pending' },
            { id: '#854599', checked:false, name: 'Daniel Williams', createdAtDate: '01 Mar 2024', createdAtTime: '3:30 PM', dueDate: '01 Mar 2024', dueTime: '3:30 PM', img: './assets/images/users/user-sm-1.png', amount: '$2,345,678', sent: 3, price: '$115.00', status: 'Draft' },
            { id: '#854600', checked:false, name: 'Olivia Jones', createdAtDate: '02 Mar 2024', createdAtTime: '11:45 AM', dueDate: '02 Mar 2024', dueTime: '11:45 AM', img: './assets/images/users/user-sm-2.png', amount: '$6,789,012', sent: 6, price: '$125.00', status: 'Overdue' },
            { id: '#854601', checked:false, name: 'Matthew Brown', createdAtDate: '03 Mar 2024', createdAtTime: '8:15 PM', dueDate: '03 Mar 2024', dueTime: '8:15 PM', img: './assets/images/users/user-sm-3.png', amount: '$4,567,890', sent: 4, price: '$135.00', status: 'Paid' },
            { id: '#854602', checked:false, name: 'Sophia Garcia', createdAtDate: '04 Mar 2024', createdAtTime: '2:00 AM', dueDate: '04 Mar 2024', dueTime: '2:00 AM', img: './assets/images/users/user-sm-4.png', amount: '$1,234,567', sent: 2, price: '$145.00', status: 'Pending' },
            { id: '#854603', checked:false, name: 'Jacob Miller', createdAtDate: '05 Mar 2024', createdAtTime: '6:45 PM', dueDate: '05 Mar 2024', dueTime: '6:45 PM', img: './assets/images/users/user-sm-5.png', amount: '$7,890,123', sent: 7, price: '$155.00', status: 'Draft' }],
              filterInvoiceByStatus(status){
            if(status =='all'){            
             this.filteredInvoices= this.invoices
            } else{
              this.filteredInvoices= this.invoices.filter(invoice => invoice.status === status)
            }         
          },
          handleSelect(e){
          const {name,checked} = e.target
          if(name=='select-all'){
            this.filteredInvoices= this.filteredInvoices.map(invoice => ({...invoice,checked:checked}))
          }  
          this.isAllChecked()       
        },
        isAllChecked(){
          return this.filteredInvoices.every(item => item.checked==true)
        }
          }"
              x-init="filteredInvoices=invoices"
              class="white-box"
            >
              <div class="flex justify-between items-center bb-dashed-n30">
                <h4>Invoice List</h4>
                <div class="flex flex-wrap items-center gap-4">
                  <div class="flex items-center gap-3">
                    <span>Sort By : </span>
                    <select name="sort" class="nc-select n20">
                      <option value="all">All</option>
                      <option value="new">New</option>
                      <option value="old">Old</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- Tabs -->
              <div class="bb-dashed-n30">
                <div class="col-span-12 flex max-w-max flex-wrap gap-4 rounded-xl md:rounded-[40px] border border-neutral-30 p-3 dark:border-neutral-500">
                  <button @click="activeTab='all', filterInvoiceByStatus('all')" :class="activeTab=='all' ?'bg-primary-300 text-neutral-0': 'bg-neutral-20 dark:bg-neutral-903'" class="rounded-full capitalize px-4 py-2 text-sm font-semibold lg:px-6 lg:py-2.5">all</button>
                  <button @click="activeTab='Paid', filterInvoiceByStatus('Paid')" :class="activeTab=='Paid' ?'bg-primary-300 text-neutral-0': 'bg-neutral-20 dark:bg-neutral-903'" class="rounded-full capitalize px-4 py-2 text-sm font-semibold lg:px-6 lg:py-2.5">Paid</button>
                  <button @click="activeTab='Pending', filterInvoiceByStatus('Pending')" :class="activeTab=='Pending' ?'bg-primary-300 text-neutral-0': 'bg-neutral-20 dark:bg-neutral-903'" class="rounded-full capitalize px-4 py-2 text-sm font-semibold lg:px-6 lg:py-2.5">pending</button>
                  <button @click="activeTab='Overdue', filterInvoiceByStatus('Overdue')" :class="activeTab=='Overdue' ?'bg-primary-300 text-neutral-0': 'bg-neutral-20 dark:bg-neutral-903'" class="rounded-full capitalize px-4 py-2 text-sm font-semibold lg:px-6 lg:py-2.5">Overdue</button>
                  <button @click="activeTab='Draft', filterInvoiceByStatus('Draft')" :class="activeTab=='Draft' ?'bg-primary-300 text-neutral-0': 'bg-neutral-20 dark:bg-neutral-903'" class="rounded-full capitalize px-4 py-2 text-sm font-semibold lg:px-6 lg:py-2.5">Draft</button>
                </div>
              </div>
              <!-- filter -->
              <div class="flex justify-between max-lg:flex-wrap items-center gap-4 xxl:gap-6 mb-6">
                <div x-data="{isOpen:false,selected:'Hr Manager', items:['Hr Manager', 'Hr Supervisor','Data Analyst','Legal Counsel','UI/UX Designer','Project Manager','Account Manager']}" class="relative col-span-1 lg:max-w-[220px] w-full">
                  <div @click="isOpen=!isOpen" class="relative flex cursor-pointer items-center justify-between rounded-full border border-neutral-30 px-6 py-2 dark:border-neutral-500">
                    <span x-text="selected"></span>
                    <i class="las la-angle-down text-lg duration-300" :class="isOpen?'rotate-180':'rotate-0'"></i>
                  </div>
                  <div x-show="isOpen" @click.away="isOpen=false" class="absolute custom-scrollbar left-0 top-full z-10 flex max-h-[200px] w-full flex-col gap-1 overflow-y-auto rounded-lg bg-neutral-0 p-1 shadow-xl dark:bg-neutral-904">
                    <template x-for="item in items">
                      <div @click="selected=item, isOpen=false" :class="selected===item?'bg-primary-300  text-neutral-0':'hover:bg-primary-50 dark:hover:bg-neutral-903'" class="cursor-pointer rounded-md px-4 py-2 duration-300" x-text="item"></div>
                    </template>
                  </div>
                </div>
                <div class="flex items-center rounded-full border border-neutral-30 dark:border-neutral-500 lg:max-w-[220px] w-full py-2.5 px-5">
                  <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Start Date" class="w-full bg-transparent" />
                </div>
                <div class="flex items-center rounded-full border border-neutral-30 dark:border-neutral-500 lg:max-w-[220px] w-full py-2.5 px-5">
                  <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="End Date" class="w-full bg-transparent" />
                </div>
                <div class="flex gap-4 xxl:gap-6 items-center grow">
                  <div class="flex grow items-center rounded-full border border-neutral-30 dark:border-neutral-500 w-full py-2 px-5">
                    <input type="text" placeholder="Search" class="w-full bg-transparent" />
                    <i class="las la-search text-lg"></i>
                  </div>
                  <button>
                    <div x-data="dropdown" class="relative flex justify-center" @click.away="close()">
  <i class="las la-ellipsis-v cursor-pointer text-2xl" @click="toggle()"></i>
  <ul class="horiz-option" :class="isOpen?'show':'hide'">
    <li>
      <span class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50"> <i class="las la-print text-xl"></i> Print </span>
    </li>
    <li>
      <span class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50"> <i class="las la-share-alt-square text-xl"></i> Share </span>
    </li>
    <li>
      <span class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50"> <i class="las la-download text-xl"></i> Download </span>
    </li>
    <li>
      <span class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50"> <i class="las la-trash text-xl"></i> Delete </span>
    </li>
  </ul>
</div>

                  </button>
                </div>
              </div>

              <!-- search results -->
              <div x-show="activeTab !='all'" class="flex flex-wrap justify-between items-center gap-3 mb-4 xl:mb-6">
                <p><span x-text="filteredInvoices.length"></span> results found</p>
                <div class="flex items-center gap-4">
                  <span>Status: </span>
                  <div class="chip soft-default">
                    <span class="icon">
                      <i class="las la-layer-group"></i>
                    </span>
                    <span x-text="activeTab"></span>
                    <span class="icon cursor-pointer" @click="activeTab='all',filterInvoiceByStatus('all')">
                      <i class="las la-times"></i>
                    </span>
                  </div>
                  <button class="flex items-center gap-2 text-error-300 font-semibold text-sm" @click="activeTab='all',filterInvoiceByStatus('all')">
                    <i class="las la-trash text-base"></i>
                    Clear
                  </button>
                </div>
              </div>

              <!-- product list -->
              <div x-data="{dense: false, row6:false}" class="checkboxes-container overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                  <thead class="text-left">
                    <tr class="bg-neutral-20 dark:bg-neutral-903">
                      <th class="px-6 duration-300" :class="dense? 'py-2': 'py-4'">
                        <label for="checkbox2" class="option">
                          <input type="checkbox" id="checkbox2" :checked="isAllChecked()" @change="handleSelect($event)" name="select-all" aria-checked="false" />
                          <span class="checkbox primary"></span>
                        </label>
                      </th>
                      <th class="px-6 duration-300" :class="dense? 'py-2': 'py-5'">Customer</th>
                      <th class="px-6 duration-300" :class="dense? 'py-2': 'py-5'">Create</th>
                      <th class="px-6 duration-300" :class="dense? 'py-2': 'py-5'">Due</th>
                      <th class="px-6 duration-300" :class="dense? 'py-2': 'py-5'">Amount</th>
                      <th class="px-6 duration-300" :class="dense? 'py-2': 'py-5'">Sent</th>
                      <th class="px-6 duration-300" :class="dense? 'py-2': 'py-5'">Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <template x-for="invoice in filteredInvoices">
                      <tr class="border-b border-neutral-30 duration-300 hover:bg-neutral-20 dark:border-neutral-500 dark:hover:bg-neutral-903" :class="invoice.checked?'!bg-primary-300/10':'bg-neutral-0 dark:bg-neutral-904'">
                        <td class="px-6" :class="dense? 'py-2': 'py-2 lg:py-3'">
                          <label :for="invoice.id" class="option">
                            <input type="checkbox" :id="invoice.id" :name="invoice.id" @change="handleSelect($event)" x-model="invoice.checked" aria-checked="false" />
                            <span class="checkbox primary"></span>
                          </label>
                        </td>
                        <td class="px-6" :class="dense? 'py-2': 'py-2 lg:py-3'">
                          <a href="invoice-details.html" class="flex items-center gap-3">
                            <img :src="invoice.img" width="32" class="rounded-full" alt="" />
                            <div>
                              <p class="m-text mb-1 font-medium" x-text="invoice.name"></p>
                              <span class="text-xs" x-text="invoice.id"></span>
                            </div>
                          </a>
                        </td>
                        <td class="px-6" :class="dense? 'py-2': 'py-2 lg:py-3'">
                          <div>
                            <p class="m-text font-medium mb-1" x-text="invoice.createdAtDate"></p>
                            <span class="text-xs" x-text="invoice.createdAtTime"></span>
                          </div>
                        </td>
                        <td class="px-6" :class="dense? 'py-2': 'py-2 lg:py-3'">
                          <div>
                            <p class="m-text font-medium mb-1" x-text="invoice.dueDate"></p>
                            <span class="text-xs" x-text="invoice.dueTime"></span>
                          </div>
                        </td>
                        <td class="px-6" :class="dense? 'py-2': 'py-2 lg:py-3'">
                          <span x-text="invoice.amount"></span>
                        </td>
                        <td class="px-6" :class="dense? 'py-2': 'py-2 lg:py-3'">
                          <span x-text="invoice.sent"></span>
                        </td>
                        <td class="px-6" :class="dense? 'py-2': 'py-2 lg:py-3'">
                          <span x-show="invoice.status=='Paid'" class="py-2 px-5 rounded-3xl text-xs text-success-300 bg-success-300/10 border border-neutral-30 dark:border-neutral-500">Paid</span>
                          <span x-show="invoice.status=='Overdue'" class="py-2 px-5 rounded-3xl text-xs text-error-300 bg-error-300/10 border border-neutral-30 dark:border-neutral-500">Overdue</span>
                          <span x-show="invoice.status=='Pending'" class="py-2 px-5 rounded-3xl text-xs text-warning-300 bg-warning-300/10 border border-neutral-30 dark:border-neutral-500">Pending</span>
                          <span x-show="invoice.status=='Draft'" class="py-2 px-5 rounded-3xl text-xs text-neutral-100 dark:text-neutral-50 bg-neutral-40 dark:bg-neutral-400 border border-neutral-30 dark:border-neutral-500">Draft</span>
                        </td>
                        <td>
                          <div x-data="dropdown" class="relative flex justify-center" @click.away="close()">
                            <i class="las la-ellipsis-v cursor-pointer text-2xl" @click="toggle()"></i>
                            <ul class="horiz-option" :class="isOpen?'show':'hide'">
                              <li>
                                <a href="invoice-details.html" class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50"> <i class="las la-eye text-xl"></i> View </a>
                              </li>
                              <li>
                                <span class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50"> <i class="las la-trash text-xl"></i> Delete </span>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                    </template>
                  </tbody>
                </table>

                <div class="mt-6 flex items-center gap-5 justify-center flex-col md:flex-row md:justify-between whitespace-nowrap">
                  <label for="switch" class="switch flex">
                    <input x-model="dense" id="switch" type="checkbox" />
                    <span class="inner primary"></span>
                    Dense
                  </label>
                  <div class="flex flex-col sm:flex-row justify-center sm:justify-between gap-5">
                    <div class="flex items-center gap-4">
                      <p>Rows per page :</p>
                      <select name="rows" id="rows" class="bg-transparent dark:bg-neutral-904">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                      </select>
                    </div>
                    <div class="f-center gap-4">
                      <p>1-10 of 100</p>
                      <button><i class="las la-angle-left text-xl rtl:rotate-180"></i></button> <button><i class="las la-angle-right text-xl rtl:rotate-180"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>