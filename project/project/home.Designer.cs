﻿namespace project
{
    partial class home
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(home));
            this.addevent = new System.Windows.Forms.Button();
            this.showevent = new System.Windows.Forms.Button();
            this.showworkers = new System.Windows.Forms.Button();
            this.eventhadiler = new System.Windows.Forms.Button();
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            this.label1 = new System.Windows.Forms.Label();
            this.addworkers = new System.Windows.Forms.Button();
            this.logout = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            this.SuspendLayout();
            // 
            // addevent
            // 
            this.addevent.Location = new System.Drawing.Point(252, 244);
            this.addevent.Name = "addevent";
            this.addevent.Size = new System.Drawing.Size(409, 41);
            this.addevent.TabIndex = 0;
            this.addevent.Text = "Add Event";
            this.addevent.UseVisualStyleBackColor = true;
            this.addevent.Click += new System.EventHandler(this.button1_Click);
            // 
            // showevent
            // 
            this.showevent.Location = new System.Drawing.Point(252, 301);
            this.showevent.Name = "showevent";
            this.showevent.Size = new System.Drawing.Size(409, 41);
            this.showevent.TabIndex = 1;
            this.showevent.Text = "Show Event\r\n";
            this.showevent.UseVisualStyleBackColor = true;
            this.showevent.Click += new System.EventHandler(this.button2_Click);
            // 
            // showworkers
            // 
            this.showworkers.Location = new System.Drawing.Point(252, 430);
            this.showworkers.Name = "showworkers";
            this.showworkers.Size = new System.Drawing.Size(409, 41);
            this.showworkers.TabIndex = 2;
            this.showworkers.Text = "Show Employee";
            this.showworkers.UseVisualStyleBackColor = true;
            this.showworkers.Click += new System.EventHandler(this.button3_Click);
            // 
            // eventhadiler
            // 
            this.eventhadiler.Location = new System.Drawing.Point(252, 197);
            this.eventhadiler.Name = "eventhadiler";
            this.eventhadiler.Size = new System.Drawing.Size(409, 41);
            this.eventhadiler.TabIndex = 3;
            this.eventhadiler.Text = "Event Hadiler";
            this.eventhadiler.UseVisualStyleBackColor = true;
            this.eventhadiler.Click += new System.EventHandler(this.eventhadiler_Click);
            // 
            // pictureBox1
            // 
            this.pictureBox1.BackColor = System.Drawing.Color.DodgerBlue;
            this.pictureBox1.Image = ((System.Drawing.Image)(resources.GetObject("pictureBox1.Image")));
            this.pictureBox1.Location = new System.Drawing.Point(361, 12);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(180, 180);
            this.pictureBox1.TabIndex = 5;
            this.pictureBox1.TabStop = false;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 20.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(61, 44);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(81, 31);
            this.label1.TabIndex = 6;
            this.label1.Text = "Hello";
            this.label1.Click += new System.EventHandler(this.label1_Click);
            // 
            // addworkers
            // 
            this.addworkers.Location = new System.Drawing.Point(252, 368);
            this.addworkers.Name = "addworkers";
            this.addworkers.Size = new System.Drawing.Size(409, 41);
            this.addworkers.TabIndex = 7;
            this.addworkers.Text = "Add Worker ";
            this.addworkers.UseVisualStyleBackColor = true;
            this.addworkers.Click += new System.EventHandler(this.button6_Click);
            // 
            // logout
            // 
            this.logout.Location = new System.Drawing.Point(252, 494);
            this.logout.Name = "logout";
            this.logout.Size = new System.Drawing.Size(409, 41);
            this.logout.TabIndex = 8;
            this.logout.Text = "Log Out";
            this.logout.UseVisualStyleBackColor = true;
            this.logout.Click += new System.EventHandler(this.button1_Click_1);
            // 
            // home
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.DodgerBlue;
            this.ClientSize = new System.Drawing.Size(931, 574);
            this.Controls.Add(this.logout);
            this.Controls.Add(this.addworkers);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.eventhadiler);
            this.Controls.Add(this.showworkers);
            this.Controls.Add(this.showevent);
            this.Controls.Add(this.addevent);
            this.Controls.Add(this.pictureBox1);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Name = "home";
            this.Text = "Form2";
            this.Load += new System.EventHandler(this.Form2_Load);
            this.KeyDown += new System.Windows.Forms.KeyEventHandler(this.home_KeyDown);
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button addevent;
        private System.Windows.Forms.Button showevent;
        private System.Windows.Forms.Button showworkers;
        private System.Windows.Forms.Button eventhadiler;
        private System.Windows.Forms.PictureBox pictureBox1;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button addworkers;
        private System.Windows.Forms.Button logout;
    }
}