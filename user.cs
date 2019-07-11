using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace _
{
    #region User
    public class User
    {
        #region Member Variables
        protected int _Id;
        protected string _Nama;
        protected string _Alamat;
        protected string _Pekerjaan;
        #endregion
        #region Constructors
        public User() { }
        public User(string Nama, string Alamat, string Pekerjaan)
        {
            this._Nama=Nama;
            this._Alamat=Alamat;
            this._Pekerjaan=Pekerjaan;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _Id;}
            set {_Id=value;}
        }
        public virtual string Nama
        {
            get {return _Nama;}
            set {_Nama=value;}
        }
        public virtual string Alamat
        {
            get {return _Alamat;}
            set {_Alamat=value;}
        }
        public virtual string Pekerjaan
        {
            get {return _Pekerjaan;}
            set {_Pekerjaan=value;}
        }
        #endregion
    }
    #endregion
}