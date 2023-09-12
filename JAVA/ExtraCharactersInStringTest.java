/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ExtraCharactersInStringTest {

    @Test
	public void testExtraCharactersInString() throws Exception {
        //Test 1
        int want = 1;
        int got = ExtraCharactersInString.minExtraChar( "leetscode", new String[]{"leet","code","leetcode"} );
        assertEquals(want, got);
        //Test 2
        want = 3;
        got = ExtraCharactersInString.minExtraChar( "sayhelloworld", new String[]{"hello","world"} );
        assertEquals(want, got);
	}

}
