namespace project
{
    partial class updateDelev
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(updateDelev));
            this.button2 = new System.Windows.Forms.Button();
            this.eventdate = new System.Windows.Forms.DateTimePicker();
            this.imagcat = new System.Windows.Forms.ComboBox();
            this.button1 = new System.Windows.Forms.Button();
            this.typeboxx = new System.Windows.Forms.ComboBox();
            this.duration = new System.Windows.Forms.TextBox();
            this.addr = new System.Windows.Forms.TextBox();
            this.label8 = new System.Windows.Forms.Label();
            this.label7 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.ename = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.Delit = new System.Windows.Forms.Button();
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            this.SuspendLayout();
            // 
            // button2
            // 
            this.button2.Location = new System.Drawing.Point(476, 686);
            this.button2.Name = "button2";
            this.button2.Size = new System.Drawing.Size(158, 42);
            this.button2.TabIndex = 40;
            this.button2.Text = "Update";
            this.button2.UseVisualStyleBackColor = true;
            this.button2.Click += new System.EventHandler(this.button2_Click);
            // 
            // eventdate
            // 
            this.eventdate.CustomFormat = "yyyy-mm-dd";
            this.eventdate.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F);
            this.eventdate.Location = new System.Drawing.Point(109, 304);
            this.eventdate.Name = "eventdate";
            this.eventdate.Size = new System.Drawing.Size(392, 31);
            this.eventdate.TabIndex = 39;
            // 
            // imagcat
            // 
            this.imagcat.DisplayMember = "mig";
            this.imagcat.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F);
            this.imagcat.FormattingEnabled = true;
            this.imagcat.Location = new System.Drawing.Point(109, 547);
            this.imagcat.Name = "imagcat";
            this.imagcat.Size = new System.Drawing.Size(392, 33);
            this.imagcat.TabIndex = 38;
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(660, 686);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(158, 42);
            this.button1.TabIndex = 37;
            this.button1.Text = "Back";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // typeboxx
            // 
            this.typeboxx.DisplayMember = "mig";
            this.typeboxx.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F);
            this.typeboxx.FormattingEnabled = true;
            this.typeboxx.Location = new System.Drawing.Point(109, 439);
            this.typeboxx.Name = "typeboxx";
            this.typeboxx.Size = new System.Drawing.Size(392, 33);
            this.typeboxx.TabIndex = 36;
            // 
            // duration
            // 
            this.duration.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.duration.Location = new System.Drawing.Point(109, 649);
            this.duration.Name = "duration";
            this.duration.Size = new System.Drawing.Size(392, 31);
            this.duration.TabIndex = 35;
            // 
            // addr
            // 
            this.addr.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.addr.Location = new System.Drawing.Point(109, 371);
            this.addr.Name = "addr";
            this.addr.Size = new System.Drawing.Size(392, 31);
            this.addr.TabIndex = 34;
            // 
            // label8
            // 
            this.label8.AutoSize = true;
            this.label8.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label8.Location = new System.Drawing.Point(103, 488);
            this.label8.Name = "label8";
            this.label8.Size = new System.Drawing.Size(247, 33);
            this.label8.TabIndex = 33;
            this.label8.Text = "Image Catergory";
            // 
            // label7
            // 
            this.label7.AutoSize = true;
            this.label7.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label7.Location = new System.Drawing.Point(103, 604);
            this.label7.Name = "label7";
            this.label7.Size = new System.Drawing.Size(248, 33);
            this.label7.TabIndex = 32;
            this.label7.Text = "Duration of Days";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label4.Location = new System.Drawing.Point(103, 403);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(84, 33);
            this.label4.TabIndex = 31;
            this.label4.Text = "Type";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.Location = new System.Drawing.Point(103, 335);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(129, 33);
            this.label3.TabIndex = 30;
            this.label3.Text = "Address";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(103, 268);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(168, 33);
            this.label2.TabIndex = 29;
            this.label2.Text = "Event Date";
            // 
            // ename
            // 
            this.ename.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.ename.Location = new System.Drawing.Point(109, 234);
            this.ename.Name = "ename";
            this.ename.Size = new System.Drawing.Size(392, 31);
            this.ename.TabIndex = 28;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(103, 198);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(185, 33);
            this.label1.TabIndex = 27;
            this.label1.Text = "Event Name";
            // 
            // Delit
            // 
            this.Delit.Location = new System.Drawing.Point(303, 686);
            this.Delit.Name = "Delit";
            this.Delit.Size = new System.Drawing.Size(158, 42);
            this.Delit.TabIndex = 41;
            this.Delit.Text = "Deliet";
            this.Delit.UseVisualStyleBackColor = true;
            this.Delit.Click += new System.EventHandler(this.Delit_Click);
            // 
            // pictureBox1
            // 
            this.pictureBox1.BackColor = System.Drawing.Color.DodgerBlue;
            this.pictureBox1.Image = ((System.Drawing.Image)(resources.GetObject("pictureBox1.Image")));
            this.pictureBox1.Location = new System.Drawing.Point(281, 15);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(180, 180);
            this.pictureBox1.TabIndex = 26;
            this.pictureBox1.TabStop = false;
            // 
            // updateDelev
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.DodgerBlue;
            this.ClientSize = new System.Drawing.Size(908, 735);
            this.Controls.Add(this.Delit);
            this.Controls.Add(this.button2);
            this.Controls.Add(this.eventdate);
            this.Controls.Add(this.imagcat);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.typeboxx);
            this.Controls.Add(this.duration);
            this.Controls.Add(this.addr);
            this.Controls.Add(this.label8);
            this.Controls.Add(this.label7);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.ename);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.pictureBox1);
            this.Name = "updateDelev";
            this.Text = "updateDelev";
            this.Load += new System.EventHandler(this.updateDelev_Load);
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button button2;
        private System.Windows.Forms.DateTimePicker eventdate;
        private System.Windows.Forms.ComboBox imagcat;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.ComboBox typeboxx;
        private System.Windows.Forms.TextBox duration;
        private System.Windows.Forms.TextBox addr;
        private System.Windows.Forms.Label label8;
        private System.Windows.Forms.Label label7;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox ename;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.PictureBox pictureBox1;
        private System.Windows.Forms.Button Delit;
    }
}