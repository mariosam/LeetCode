/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class WordSearchTest {

    @Test
	public void testWordSearch() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = WordSearch.exist( new char[][]{{'A','B','C','E'},{'S','F','C','S'},{'A','D','E','E'}}, "ABCCED" );
        assertEquals(want, got);
        //Test 2
        want = true;
        got = WordSearch.exist( new char[][]{{'A','B','C','E'},{'S','F','C','S'},{'A','D','E','E'}}, "SEE" );
        assertEquals(want, got);
        //Test 3
        want = false;
        got = WordSearch.exist( new char[][]{{'A','B','C','E'},{'S','F','C','S'},{'A','D','E','E'}}, "ABCB" );
        assertEquals(want, got);
	}

}
