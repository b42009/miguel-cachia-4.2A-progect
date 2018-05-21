using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace project
{
    public partial class updatedelitwork : Form
    {
        string connectionString = "datasource=localhost;port=3306;username=root;password=;database=events;sslMode=none";
        string clientid1;
        string woid;

        string jobid;
        public updatedelitwork(string clientid, string woid)
        {
            this.clientid1 = clientid;
            this.woid = woid;
            InitializeComponent();
            string query = "select * FROM job";
            MySqlConnection databaseConnection = new MySqlConnection(connectionString);
            MySqlCommand commandDatabase = new MySqlCommand(query, databaseConnection);
            MySqlDataReader reader;
           
            try
            {
                databaseConnection.Open();

                reader = commandDatabase.ExecuteReader();

                if (reader.HasRows)
                {
                    while (reader.Read())
                    {
                        string name = reader.GetString(1);
                        jobbox.Items.Add(name);

                    }
                }
                else
                {
                    MessageBox.Show("No results found!");
                }


                databaseConnection.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString());
                MessageBox.Show("Problem with Query");
            }
            string query1 = "select * FROM workers where workerId = '" + woid + "'  ";
            MySqlConnection databaseConnection1 = new MySqlConnection(connectionString);
            MySqlCommand commandDatabase1 = new MySqlCommand(query1, databaseConnection1);
            MySqlDataReader reader1;
          
            try
            {
                databaseConnection1.Open();

                reader1 = commandDatabase1.ExecuteReader();

                if (reader1.HasRows)
                {
                    while (reader1.Read())
                    {

                     
                        DateTime dt = DateTime.Parse(reader1.GetString(3));
                        string dv = dt.ToString("yyyy-mm-dd");

                        dob.Value = dt;

                        name.Text = reader1.GetString(1);
                        surname.Text = reader1.GetString(2);



                        email.Text = reader1.GetString(4);
                        username.Text = reader1.GetString(6);
                        password.Text = reader1.GetString(7);
                        //---------------------------------------------------------------------------------------------
                        string query5 = "select * FROM job  where jobId ='" + reader1.GetString(5) + "' ";
                        MySqlConnection databaseConnection5 = new MySqlConnection(connectionString);
                        MySqlCommand commandDatabase5 = new MySqlCommand(query5, databaseConnection5);
                        MySqlDataReader reader5;
                      
                        try
                        {
                            databaseConnection5.Open();

                            reader5 = commandDatabase5.ExecuteReader();

                            if (reader5.HasRows)
                            {
                                while (reader5.Read())
                                {
                                  
                                    jobbox.SelectedItem = reader5.GetString(1);
                                }
                            }
                            else
                            {
                                MessageBox.Show("No results found!");
                            }


                            databaseConnection5.Close();
                        }
                        catch (Exception ex)
                        {
                            MessageBox.Show(ex.ToString());
                            MessageBox.Show("Problem with Query5");
                        }
                        //-------------------------------------------------------------------------------------

                    }



                }

                else
                {
                    MessageBox.Show("No results found!");
                }


                databaseConnection1.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString());
                MessageBox.Show("Problem with Query");
            }
        }

        private void updatedelitwork_Load(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            showworkers sh = new showworkers(clientid1);
            sh.Show();
            this.Hide();
        }

        private void update_Click(object sender, EventArgs e)
        {
            if (name.Text != "" || surname.Text != "" || email.Text != "" || username.Text != "" || password.Text != "")
            {
                string query10 = "select * from job where jobName ='" + jobbox.Text + "'";
                string connectionString = "datasource=localhost;port=3306;username=root;password=;database=events;sslMode=none";
                MySqlConnection databaseConnection10 = new MySqlConnection(connectionString);
                MySqlCommand commandDatabase = new MySqlCommand(query10, databaseConnection10);
                MySqlDataReader reader0;
                
                try
                {
                    databaseConnection10.Open();

                    reader0 = commandDatabase.ExecuteReader();

                    if (reader0.HasRows)
                    {
                        while (reader0.Read())
                        {
                            string m = reader0.GetString(0);
                            jobid = m;

                        }
                    }
                    else
                    {
                        MessageBox.Show("No results found!");
                    }


                    databaseConnection10.Close();
                }
                catch (Exception ex)
                {
                    MessageBox.Show(ex.ToString());
                    MessageBox.Show("Problem with Query");
                }
                string date = dob.Value.ToString("yyyy-MM-dd");

                string query2 = "UPDATE workers  SET name='" + name.Text + "',surname='" + surname.Text + "',dateOfBirth='" + date + "',email='" + email.Text + "',jobid=' " + jobid + "',username='" + username.Text + "',password='" + password.Text + "' where workerId = '"+ woid + "'" ;
                MySqlConnection databaseConnection2 = new MySqlConnection(connectionString);
                MySqlCommand commandDatabase2 = new MySqlCommand(query2, databaseConnection2);
                MySqlDataReader reader2;
               
                try
                {
                    databaseConnection2.Open();

                    commandDatabase2.ExecuteReader();
                    MessageBox.Show("the worker was created");
                    this.Hide();
                    showworkers h1 = new showworkers(clientid1);
                    h1.Show();





                    databaseConnection2.Close();
                }
                catch (Exception ex)
                {
                    MessageBox.Show(ex.ToString());
                    MessageBox.Show("Problem with Query");
                }
            }
            else { MessageBox.Show("fill al inputs"); }
        }

        private void Delit_Click(object sender, EventArgs e)
        {
            string query7 = " DELETE FROM workers where workerId ='" + woid + "'  ";
            MySqlConnection databaseConnection7 = new MySqlConnection(connectionString);
            MySqlCommand commandDatabase7 = new MySqlCommand(query7, databaseConnection7);
            MySqlDataReader reader7;
         
            try
            {
                databaseConnection7.Open();

                commandDatabase7.ExecuteReader();
                MessageBox.Show("the worker has ben Delited");
                this.Hide();
                showworkers h1 = new showworkers(clientid1);
                h1.Show();





                databaseConnection7.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString());
                MessageBox.Show("Problem with Query");
            }

        }
    }
    }
    

