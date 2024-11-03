/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class DeleteCharactersToMakeFancyStringTest {

    @Test
	public void testDeleteCharactersToMakeFancyString() throws Exception {
        //Test 1
        String want =  "leetcode";
        String got = DeleteCharactersToMakeFancyString.makeFancyString( "leeetcode" );
        assertEquals(want, got);
        //Test 2
        want =  "aabaa";
        got = DeleteCharactersToMakeFancyString.makeFancyString( "aaabaaaa" );
        assertEquals(want, got);
        //Test 3
        want =  "aab";
        got = DeleteCharactersToMakeFancyString.makeFancyString( "aab" );
        assertEquals(want, got);
	}

}
