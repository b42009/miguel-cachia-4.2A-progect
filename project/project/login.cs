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
    public partial class login : Form
    {

        public void log()
        {
            String username = user.Text;
            String password = pass.Text;
            string connectionString = "datasource=localhost;username=root;password=;database=events;";
            string query = "SELECT * FROM workers where userName ='"+ username + "' and passWord = '" + password + "'";
            MySqlConnection databaseConnection = new MySqlConnection(connectionString);
            MySqlCommand commandDatabase = new MySqlCommand(query, databaseConnection);
           
            MessageBox.Show(query);
            MySqlDataReader reader;
            try
            {
                databaseConnection.Open();

                reader = commandDatabase.ExecuteReader();

                if (reader.HasRows)
                {
                    while (reader.Read())
                    {
                        string id = reader.GetInt32(0).ToString();
                        MessageBox.Show(id);
                        home f1 = new home(id);
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


        




    

         public login()
        {
            InitializeComponent();
        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void button2_Click(object sender, EventArgs e)
        {
            log();
        }
    }
}
