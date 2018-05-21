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
using MySql.Data.MySqlClient;

namespace project
{
    public partial class showevent : Form
    {
        string clientid1;
        string typen;
        string imgc;
        public showevent(string clientid)
        {
            this.clientid1 = clientid;
            InitializeComponent();
          
            string connectionString = "datasource=localhost;port=3306;username=root;password=;database=events;sslMode=none";
            string query2 = "select * from event";
            MySqlConnection databaseConnection2 = new MySqlConnection(connectionString);
            MySqlCommand commandDatabase2 = new MySqlCommand(query2, databaseConnection2);
            MySqlDataReader reader;
            
            try
            {
                databaseConnection2.Open();

                reader =commandDatabase2.ExecuteReader();
                if (reader.HasRows)
                {
                    while (reader.Read())
                    {


                        string connectionString2 = "datasource=localhost;port=3306;username=root;password=;database=events;sslMode=none";
                        string query1 = "select* from eventtypes where typeId='" + reader.GetString(7) + "'";
                MySqlConnection databaseConnection1 = new MySqlConnection(connectionString2);
                        MySqlCommand commandDatabase1 = new MySqlCommand(query1, databaseConnection1);
                        MySqlDataReader reader1;
                       
                        try
                        {
                            databaseConnection1.Open();

                            reader1 = commandDatabase1.ExecuteReader();
                            if (reader1.Read())
                            {
                                typen = reader1.GetString(1);
                            }





                            databaseConnection1.Close();
                        }
                        catch (Exception ex)
                        {
                            MessageBox.Show(ex.ToString());
                            MessageBox.Show("Problem with Query");
                        }
                        //--------------------------------------------------------------------------------------------------------------
                        string connectionString3 = "datasource=localhost;port=3306;username=root;password=;database=events;sslMode=none";
                        string query3 = "select* from imagcategory where id='" + reader.GetString(8) + "'";
                        MySqlConnection databaseConnection3 = new MySqlConnection(connectionString3);
                        MySqlCommand commandDatabase3 = new MySqlCommand(query3, databaseConnection3);
                        MySqlDataReader reader3;
                       
                        try
                        {
                            databaseConnection3.Open();

                            reader3 = commandDatabase3.ExecuteReader();
                            if (reader3.Read())
                            {
                                imgc = reader3.GetString(1);
                            }





                            databaseConnection1.Close();
                        }
                        catch (Exception ex)
                        {
                            MessageBox.Show(ex.ToString());
                            MessageBox.Show("Problem with Query");
                        }
                        //--------------------------------------------------------------------------------------------------------------
                        dataGridView1.Rows.Add(reader.GetString(0), reader.GetString(1),reader.GetString(2),reader.GetString(3),reader.GetString(4),reader.GetString(5), typen, imgc, reader.GetString(9));
                        

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

        private void tableLayoutPanel1_Paint(object sender, PaintEventArgs e)
        {

        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            string ind =dataGridView1.CurrentRow.Cells[0].Value.ToString();
            updateDelev u1 = new updateDelev(clientid1,ind);
            u1.Show();
            this.Hide();
            
        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            
            home h1 = new home(clientid1);
            h1.Show();
            this.Hide();
        }
    }
}
