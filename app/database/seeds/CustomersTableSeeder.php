<?php

class CustomersTableSeeder extends Seeder {

	public function run()
	{
            // Uncomment the below to wipe the table clean before populating
            //DB::table('customers')->delete();
     
                    function csv_to_array($filename='customers.csv', $delimiter=',')
                            {
                                if(!file_exists($filename) || !is_readable($filename))
                                    return FALSE;
                             
                                $header = NULL;
                                $data = array();
                                if (($handle = fopen($filename, 'r')) !== FALSE)
                                {
                                    while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
                                    {
                                        if(!$header)
                                            $header = $row;
                                        else
                                            $data[] = array_combine($header, $row);
                                    }
                                    fclose($handle);
                                }
                                return $data;
                            }
     
                            /****************************************
                            * CSV FILE SAMPLE *
                            ****************************************/
							//active,owner,tentant,name,address1,city,state,zip,country,email,home_phone,work_phone,cell_phone,other_phone
							//1,1,0,Mrs. Bobbi Yang,2569 Webster Street,Freehold,NJ,7728,United States,BobbiPYang@einrot.com,,,732-577-5445,
							//1,1,0,Mr. Paul Underwood,63 Wayside Lane,Oakland,CA,94612,United States,PaulAUnderwood@superrito.com,,510-241-7788,,
							//1,1,0,Dr. Monica Haak,378 Albert Street,Kitchener,ON,N2L 3V2,Canada,MonicaJHaak@dayrep.com,,519-885-2477,,

                             
                            $csvFile = app_path().'/database/seeds/customers.csv';
     
                            $areas = csv_to_array($csvFile);
            //troubleshoot below
            //var_dump($areas);
            //print $csvFile;
            // Uncomment the below to run the seeder
            DB::table('customers')->insert($areas);
        }
     
    }