/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MakeTheStringGreatTest {

    @Test
	public void testMakeTheStringGreat() throws Exception {
        //Test 1
        String want = "leetcode";
        String got = MakeTheStringGreat.makeGood( "leEeetcode" );
        assertEquals(want, got);
        //Test 2
        want = "";
        got = MakeTheStringGreat.makeGood( "abBAcC" );
        assertEquals(want, got);
        //Test 3
        want = "s";
        got = MakeTheStringGreat.makeGood( "s" );
        assertEquals(want, got);
	}

}
