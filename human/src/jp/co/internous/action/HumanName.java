package jp.co.internous.action;

public class HumanName {

	public String lastname;
	private String firstname;
	public String getName() {
		firstname="山田";
		lastname="太郎";
		String myName=firstname+lastname;
		return myName;
	}

}
