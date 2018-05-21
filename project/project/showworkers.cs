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
    public partial class showworkers : Form
    {
        string clientid1;
        string jobb;
        public showworkers(string clientid)
        {
            this.clientid1 = clientid;
            InitializeComponent();
            string connectionString = "datasource=localhost;port=3306;username=root;password=;database=events;sslMode=none";
            string query2 = "select * from workers";
            MySqlConnection databaseConnection2 = new MySqlConnection(connectionString);
            MySqlCommand commandDatabase2 = new MySqlCommand(query2, databaseConnection2);
            MySqlDataReader reader;

            try
            {
                databaseConnection2.Open();

                reader = commandDatabase2.ExecuteReader();
                if (reader.HasRows)
                {
                    while (reader.Read())
                    {


                        string connectionString2 = "datasource=localhost;port=3306;username=root;password=;database=events;sslMode=none";
                        string query1 = "select* from job where jobId='" + reader.GetString(5) + "'";
                        MySqlConnection databaseConnection1 = new MySqlConnection(connectionString2);
                        MySqlCommand commandDatabase1 = new MySqlCommand(query1, databaseConnection1);
                        MySqlDataReader reader1;
                       
                        try
                        {
                            databaseConnection1.Open();

                            reader1 = commandDatabase1.ExecuteReader();
                            if (reader1.Read())
                            {
                                jobb = reader1.GetString(1);
                            }





                            databaseConnection1.Close();
                        }
                        catch (Exception ex)
                        {
                            MessageBox.Show(ex.ToString());
                            MessageBox.Show("Problem with Query");
                        }
                        //--------------------------------------------------------------------------------------------------------------
                      
                        //--------------------------------------------------------------------------------------------------------------
                        dataGridView1.Rows.Add(reader.GetString(0), reader.GetString(1), reader.GetString(2), reader.GetString(3), reader.GetString(4), jobb, reader.GetString(6), reader.GetString(7));


                    }
                }







                databaseConnection2.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString());
                MessageBox.Show("Problem with Query");
            }
        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            string ind = dataGridView1.CurrentRow.Cells[0].Value.ToString();
            updatedelitwork u1 = new updatedelitwork(clientid1, ind);
            u1.Show();
            this.Hide();
        }

        private void showworkers_Load(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            this.Hide();
            home h1 = new home(clientid1);
            h1.Show();
        }
    }
}
