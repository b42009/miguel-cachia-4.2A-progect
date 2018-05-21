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
    public partial class addworker : Form
    {
        string clientid1;
        string jobid;
        string connectionString = "datasource=localhost;port=3306;username=root;password=;database=events;sslMode=none";
        public addworker(string clientid)
        {
            this.clientid1 = clientid;
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

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void button2_Click(object sender, EventArgs e)
        {
            if (name.Text != "" || surname.Text != "" || email.Text != "" || username.Text != "" || password.Text != "")
            {

                string query10 = "select * from job where jobName ='" + jobbox.Text + "'";
                 string connectionString = "datasource=localhost;port=3306;username=root;password=;database=events;sslMode=none";
                MySqlConnection databaseConnection10 = new MySqlConnection(connectionString);
                MySqlCommand commandDatabase = new MySqlCommand(query10, databaseConnection10);
                MySqlDataReader reader0;
                ;
                try
                {
                    databaseConnection10.Open();

                    reader0 = commandDatabase.ExecuteReader();

                    if (reader0.HasRows)
                    {
                        while (reader0.Read())
                        {
                            string m = reader0.GetString(0);
                            jobid= m;

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

                string query2 = "INSERT INTO workers (name,surname,dateOfBirth,email,jobid,username,password) VALUES ('" + name.Text + "','" + surname.Text + "','"+ date + "','" + email.Text + "',' " +jobid+ "','" + username.Text + "','" + password.Text + "')";
                MySqlConnection databaseConnection2 = new MySqlConnection(connectionString);
                MySqlCommand commandDatabase2 = new MySqlCommand(query2, databaseConnection2);
                MySqlDataReader reader2;
              
                try
                {
                    databaseConnection2.Open();

                    commandDatabase2.ExecuteReader();
                    MessageBox.Show("the event was created");
                    this.Hide();
                    home h1 = new home(clientid1);
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

        private void typeboxx_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            home sh = new home(clientid1);
            sh.Show();
            this.Hide();
        }

        private void addworker_Load(object sender, EventArgs e)
        {

        }
    }
}
